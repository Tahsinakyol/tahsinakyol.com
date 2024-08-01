<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\FormMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function gonder(Request $request)
    {
        try {
            // Formdan gelen verileri al
            $ad = $request->input('ad');
            $eposta = $request->input('eposta');
            $telefon = $request->input('telefon');
            $konu = $request->input('konu');
            $mesaj = $request->input('mesaj');

            // Verileri kullanarak e-posta oluşturabilir veya başka bir işlem yapabilirsiniz
            Mail::to('tahsinakyool@gmail.com')->send(new FormMail($ad, $eposta, $telefon, $konu, $mesaj));

            // Başarılı bir şekilde gönderildiğine dair bir mesaj döndür
            return response()->json(['message' => 'Form başarıyla gönderildi'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Form gönderilirken bir hata oluştu: ' . $e->getMessage()], 500);
        }
    }
}