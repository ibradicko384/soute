<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice(Request $request)
    {
        return view('auth.verify-email'); // Assurez-vous que le nom de la vue correspond à votre structure de fichiers
    }
}