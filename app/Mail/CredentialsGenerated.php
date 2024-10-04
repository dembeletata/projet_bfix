<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CredentialsGenerated extends Mailable
{
    use Queueable, SerializesModels;

    public $pseudo;
    public $motDePasse;

    public function __construct($pseudo, $motDePasse)
    {
        $this->pseudo = $pseudo;
        $this->motDePasse = $motDePasse;
    }

    public function build()
    {
        return $this->view('emails.credentials')
                    ->with([
                        'pseudo' => $this->pseudo,
                        'motDePasse' => $this->motDePasse,
                    ])
                    ->subject('Vos identifiants de connexion');
    }
}
