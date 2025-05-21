<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeleteAccountVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    
    public function __construct(User $user) // <- Ini HARUS App\Models\User
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Verifikasi Penghapusan Akun Anda')
            ->markdown('includes.components.main.emails.delete-account-verification')
            ->with([
                'url' => url('/verify-delete-account/' . $this->user->deletion_token),
            ]);
    }
}
