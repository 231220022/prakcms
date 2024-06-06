<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function daftarfooter()
    {
        return view('layouts/admin/footer');
    }

    public function tambahfooter()
    {
        return view('layouts/admin/tambahfooter');
    }

    public function editfooter()
    {
        return view('layouts/admin/editfooter');
    }
}
