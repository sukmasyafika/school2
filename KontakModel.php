<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
  protected $table = 'kontak';
  protected $useTimestamps = true;
  protected $allowedFields = ['nama', 'slug', 'email', 'subjek', 'pesan', 'created_at'];

  public function simpanPesan($data)
  {
    return $this->insert($data);
  }

  public function getAllPesan()
  {
    return $this->findAll();
  }
}
