<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->getKomik();
        $data = [
            'tittle' => "Daftar Komik",
            'komik' => $this->komikModel->getKomik()
        ];

        //cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tittle' => 'Detal Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('komik/detal', $data);
    }
}
