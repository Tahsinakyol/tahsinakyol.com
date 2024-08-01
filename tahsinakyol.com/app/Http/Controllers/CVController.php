<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function indir()
    {
        $dosyaYolu = public_path('images/cv/tahsinakyol.pdf');

        if (file_exists($dosyaYolu)) {

            return response()->download($dosyaYolu);
        } else {
            abort(404);
        }
    }
}
