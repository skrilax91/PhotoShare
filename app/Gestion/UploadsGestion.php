<?php 

namespace App\Gestion;


use App\Repositories\UploadRepository;

class UploadsGestion
{

    protected $uploadRepository;

    public function __construct(UploadRepository $uploadRepository)
    {
        $this->uploadRepository = $uploadRepository;
    }

    public function save($image, $request)
	{
		if($image->isValid())
		{
			$chemin = config('upload.path');
			$extension = $image->getClientOriginalExtension();

			do {
				$nom = str_random(10);
			} while(file_exists($chemin . '/' . $nom));

            $doit = $image->move($chemin, $nom.".".$extension);

            $inputs = [
                "titre" => $request["title"],
                "code" => $nom,
                "ext" => $extension,
                "user_id" => $request->user()->id
            ];

            if ($doit) {

                $this->uploadRepository->store($inputs);

                return $doit;
            }
		}

		return false;
	}

}