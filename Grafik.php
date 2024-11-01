<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\TenagaModel;

class Grafik extends BaseController
{
  // variabel local
  protected $siswaModel, $tenagaModel;

  public function __construct()
  {
    $this->siswaModel = new SiswaModel();

    // $this->tenagaModel = new TenagaModel();
  }

  public function index()
  {

    $dataJurusan = $this->siswaModel->select('jurusan, COUNT(*) as total')
      ->groupBy('jurusan')
      ->findAll();

    $data = [
      'title' => 'Charts',
      'dataJurusan' => $dataJurusan,
    ];

    return view('admin/grafik/index', $data);
  }
}
