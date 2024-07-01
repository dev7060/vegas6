<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        helper(['form']);
        $user = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
           
        ];

        return view('profile', ['user' => $user]);
    }

    public function update()
    {
        helper(['form']);
        if (!session()->has('user_id')) {
            return redirect()->to('/login');
        }

        $model = new UserModel();
        $user = $model->find(session('user_id'));

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        $picture = $this->request->getFile('picture');
        if ($picture->isValid() && !$picture->hasMoved()) {
            $newName = $picture->getRandomName();
            $picture->move(WRITEPATH . 'uploads', $newName);
            $data['picture'] = 'uploads/' . $newName;
        }

        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }

        $model->update($user['id'], $data);

        return redirect()->to('/profile');
    }
}
