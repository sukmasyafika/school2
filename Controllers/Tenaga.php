<?php

namespace App\Controllers;

use App\Models\TenagaModel;
use App\Models\TenagaModelModel;

class Tenaga extends BaseController
{
  // variabel local
  protected $tenagaModel;

  public function __construct()
  {
    //tenaga 
    $this->tenagaModel = new TenagaModel();
  }
  public function index()
  {
    $tenaga = $this->tenagaModel->findAll();

    $data = [
      'title' => 'Tenaga',
      'tenaga' => $tenaga
    ];

    return view('admin/tenaga', $data);
  }

  public function detail($slug)
  {
    echo $slug;
  }
}
