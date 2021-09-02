<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => 3103119028,
            "Nama" => "Arif Destianto",
            "Gender" => "Laki-laki",
            "Phone" => 6281215688821,
            "Class" => "XII RPL 1"
        ];
    }
}
