<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // variabel local
    protected $db, $builder;

    public function __construct()
    {
        // Menggunakan query builder
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin'
        ];

        return view('admin/dashboard', $data);
    }

    public function pengguna()
    {
        $data = [
            'title' => 'Pengguna'
        ];

        // $users = new \Myth\Auth\Models\UserModel();
        // mengambil semua data user
        // $data['users'] = $users->findAll();

        $this->builder->select('users.id as userid, username, email, name');
        // join tbl user & grop user (users id (tbl grop users) harus sama dgn users _id)
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        // auth grup id harus sma dengan group user id
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        // query
        $data['users'] = $query->getResult();

        return view('admin/pengguna', $data);
    }

    public function detail($id = 0)
    {
        $data = [
            'title' => 'User Detail'
        ];

        $this->builder->select('users.id as userid, username, email, fullname, user_img, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        // users id  = id
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        // query
        $data['user'] = $query->getRow();

        // tagani jika kosong 
        if (empty($data['user'])) {
            return redirect()->to('admin/pengguna');
        }

        return view('admin/detail', $data);
    }
}
