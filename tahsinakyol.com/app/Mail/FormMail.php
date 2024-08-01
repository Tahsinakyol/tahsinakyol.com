<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $ad;
    public $eposta;
    public $telefon;
    public $konu;
    public $mesaj;

    public function __construct($ad, $eposta, $telefon, $konu, $mesaj)
    {
        $this->ad = $ad;
        $this->eposta = $eposta;
        $this->telefon = $telefon;
        $this->konu = $konu;
        $this->mesaj = $mesaj;
    }

    public function build()
    {
        return $this->view('emails.form_mail')
            ->with([
                'ad' => $this->ad,
                'eposta' => $this->eposta,
                'telefon' => $this->telefon,
                'konu' => $this->konu,
                'mesaj' => $this->mesaj,
            ]);
    }
}
