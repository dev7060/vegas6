<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        helper(['form']); 

        return view('login'); 
    }

    public function authenticate()
    {
        helper(['form']); 

        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'picture' => $user['picture']
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
