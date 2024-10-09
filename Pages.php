<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home'
    ];
    return view('pages/home', $data);
  }

  public function profil()
  {
    $data = [
      'title' => 'Profil'
    ];
    return view('pages/profil', $data);
  }

  public function galeri()
  {
    $data = [
      'title' => 'Galery'
    ];
    return view('pages/galeri', $data);
  }

  public function berita()
  {
    $data = [
      'title' => 'Berita'
    ];
    return view('pages/berita', $data);
  }

  public function contact()
  {
    $data = [
      'title' => 'Contact'
    ];
    return view('pages/contact', $data);
  }

  public function admin()
  {
    $data = [
      'title' => 'Admin'
    ];
    return view('admin/index', $data);
  }

  public function login()
  {
    $data = [
      'title' => 'Login'
    ];
    return view('auth/login', $data);
  }

  public function regis()
  {
    $data = [
      'title' => 'Login'
    ];
    return view('auth/register', $data);
  }
}
