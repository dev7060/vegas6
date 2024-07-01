<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        helper(['form']); 

        return view('register');
    }

    public function save()
    {
        helper(['form']); 
        $model = new UserModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $picture = $this->request->getFile('picture');
        if ($picture->isValid() && !$picture->hasMoved()) {
            $newName = $picture->getRandomName();
            $picture->move(WRITEPATH . 'uploads', $newName);
            $data['picture'] = 'uploads/' . $newName;
        }

        $model->save($data);

        return redirect()->to('/login');
    }
}
