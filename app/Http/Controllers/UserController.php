<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;

class UserController extends Controller
{
    public function getkota($id_provinsi)
    {
        return Kota::where('id_provinsi',$id_provinsi)->get();
    }
}
