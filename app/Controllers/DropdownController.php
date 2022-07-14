<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DropdownController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = db_connect();
    }
    public function index()
    {
        $countries = $this->db->query("SELECT id, name from countries")->getResultArray();

        return view("dropdown", compact('countries'));
    }

    public function getState()
    {
        $country_id = $this->request->getVar("country_id");

        $states = $this->db->query("SELECT id, name from states where country_id = " . $country_id)->getResultArray();

        return json_encode($states);
    }

    public function getCity()
    {
        $state_id = $this->request->getVar("state_id");

        $cities = $this->db->query("SELECT id, name from cities where state_id = " . $state_id)->getResultArray();

        return json_encode($cities);
    }
}
