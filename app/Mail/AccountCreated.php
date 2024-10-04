<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function build()
    {
        return $this->view('emails.account_created')
                    ->with([
                        'username' => $this->username,
                        'password' => $this->password,
                    ]);
    }
}
