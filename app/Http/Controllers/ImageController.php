<?php

namespace App\Http\Controllers;

use App\Repositories\ImageRepository;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{

    protected $imageRepository;

    protected $nbrPerPage = 4;

    public function __construct(ImageRepository $imageRepository)
	{
		$this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);

		$this->imageRepository = $imageRepository;
	}

	public function index()
	{
		$images = $this->imageRepository->getPaginate($this->nbrPerPage);
		$links = $images->render();

		return view('images.liste', compact('images', 'links'));
	}

	public function create()
	{
		return view('images.add');
	}

	public function store(ImageRequest $request)
	{
		$inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

		$this->imageRepository->store($inputs);

		return redirect(route('image.index'));
	}

	public function destroy($id)
	{
		$this->imageRepository->destroy($id);

		return redirect()->back();
	}

}