<?php

namespace App\Controllers;

use App\Models\KontakModel;


class Kontak extends BaseController
{

  protected $kontakModel;

  public function __construct()
  {
    $this->kontakModel = new KontakModel();
  }

  public function kirim()
  {
    $data = [
      'nama' => $this->request->getPost('nama'),
      'email' => $this->request->getPost('email'),
      'subjek' => $this->request->getPost('subjek'),
      'pesan' => $this->request->getPost('pesan'),
    ];

    $this->kontakModel->simpanPesan($data);

    return redirect()->to('pages/contact');
  }

  public function lihat()
  {
    $data = [
      'title' => 'Pesan',
      'pesan' => $this->kontakModel->getAllPesan()
    ];

    return view('admin/pesan/index', $data);
  }

  public function messages()
  {
    // Ambil 5 pesan terbaru
    $pesan = $this->kontakModel->orderBy('created_at', 'DESC')->limit(5)->findAll();
    return $pesan;
  }

  public function notif()
  {
    $pesan = $this->messages();
    $data = [
      'pesan' => $pesan
    ];

    return view('layoutAdmin/navbar', $data);
  }

  public function delete($id)
  {
    $this->kontakModel->delete($id);
    session()->setFlashdata('pesan', 'Data Berhasil DiHapus.');
    return redirect()->to('/pesan');
  }
}
