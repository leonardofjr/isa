<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuoteRequest extends Mailable
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
    public function build(Request $request)
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->markdown('mail.quote')
                    ->with([
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'city' => $request->city,
                        'province' => $request->province,
                        'message' => $request->message,
                    ]);
    }
}
