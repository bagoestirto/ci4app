<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Den Bagoes',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'tittle' => 'About | Den Bagoes'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'tittle' => 'Contact | Den Bagoes',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Apa saja',
                    'kota' => 'Turin'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Ini saja',
                    'kota' => 'London'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
