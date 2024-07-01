<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Search extends Controller
{
    public function index()
    {
        helper(['form']);

        return view('search');
    }

    public function results()
    {
        helper(['form']);

        if (!session()->has('user_id')) {
            return redirect()->to('/login');
        }

        $query = $this->request->getPost('query');
        $apiKey = 'xxxxxxxxxxxxxxxxxxxxxxxxxxx';
        $apiUrl = 'https://pixabay.com/api/?key='.$apiKey.'&q='.urlencode($query);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $data = [
            'images' => json_decode($response)->hits
        ];

        return view('search_results', $data);
    }
}
