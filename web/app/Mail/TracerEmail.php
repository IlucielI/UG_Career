<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TracerEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ugtracer@gunadarma.ac.id')
                   ->view('user.email')
                   ->with(
                    [
                        'nama' => 'Test email UG-TRacer',
                        'email' => '$user->email',
                        'username' => '$user->username',
                        'password' => '$user->password',

                    ]);
    }
}
