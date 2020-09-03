<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ImageRequest;
use App\Gestion\UploadsGestion;
use App\Repositories\UploadRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $uploadRepository;

    public function __construct(UploadRepository $uploadRepository)
    {
        $this->middleware('auth');
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = $this->uploadRepository->getUploadsNumber(Auth::id());
        $last = config('upload.max') - $uploads;
        return view('dashboard/home', ['count' => $uploads, 'last' => $last]);
    }

    public function upload()
    {
        return view('dashboard/upload');
    }

    public function Postupload(ImageRequest $request, UploadsGestion $gestion)
    {
        $uploads = $this->uploadRepository->getUploadsNumber(Auth::id());
        $last = config('upload.max') - $uploads;
        if($last <= 0){
            return view('dashboard/home')->with('error',"Vous avez atteins la limite d'upload");
        }

        if($gestion->save($request->file('image'), $request)) {
			return view('dashboard/home')->with('success','Votre image à bien été upload');
		} 

		return view('dashboard/home')->with('error','Désolé mais votre image ne peut pas être envoyée !');
    }

    public function viewImage()
    {
        $image = Input::get('image', '');
        if($image == ""){
            return back();
        }

        $image = $this->uploadRepository->getUploadbyCode($image);
        
        if($image){
            return view('dashboard/view', ['image' => $image]);
        }

    }

    public function myUploads()
    {
        $uploads = $this->uploadRepository->getUploadsByUser(Auth::id());
        return view('dashboard/myuploads', ['uploads' => $uploads]);
    }
}
