<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/login');
        }

        $data['user'] = [
            'name' => session('name'),
            'picture' => session('picture')
        ];

        return view('dashboard', $data);
    }
}
