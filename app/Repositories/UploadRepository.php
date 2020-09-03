<?php

namespace App\Repositories;

use App\Upload;
use Barryvdh\Debugbar\Facade as Debugbar;

class UploadRepository
{

    protected $image;

    public function __construct(Upload $image)
	{
		$this->image = $image;
	}

	public function getUploadsNumber($id)
	{
		$db = $this->image->where('user_id', $id)->get();
		return count($db);
	}

	public function getUploadbyCode($imgcode)
	{
		return $this->image->where('code', $imgcode)->get()->first();
	}

	public function getUploadsByUser($id)
	{
		return $this->image->where('user_id', $id)->get();
	}

	public function getPaginate($n)
	{
		return $this->image->with('user')
		->orderBy('uploads.created_at', 'desc')
		->paginate($n);
	}

	public function store($inputs)
	{
		$this->image->create($inputs);
	}

	public function destroy($id)
	{
		$this->image->findOrFail($id)->delete();
	}

}