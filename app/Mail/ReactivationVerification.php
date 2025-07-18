<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReactivationVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $url;
    
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->url = url('/reactivate/verify/' . $user->reactivation_token);
    }

    public function build()
    {
        return $this->subject('Verifikasi Reaktivasi Akun Anda')
                    ->markdown('includes.components.main.emails.reactivation-verification');
    }
}
