<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
	protected $mahasiswa;

	public function index()
	{
		$mahasiswa = $this->mahasiswa->findAll();
		$data = [
			'mahasiswa' => $mahasiswa,
		];
		return view('home/index', $data);
	}

	//--------------------------------------------------------------------

}
