<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\TradeMarkOrder;
use Illuminate\Support\Facades\Log;

class OrderUpdated extends Mailable
{
    use Queueable, SerializesModels;

    // public $order;

    // public function __construct($order)
    // {
    //     $this->order = $order;
    // }

    // public function build()
    // {
    //     return $this->subject('Order Updated')
    //                 ->view('emails.order_updated');
    // }

    public $data;

    public function __construct()
    {
        // Log::info('Data for OrderUpdated mail:', $data);
        // $this->data = $data;
    }

    // public function build()
    // {
    //     return $this->view('emails.order_updated')
    //                 ->subject('My Custom Mail Subject');
    // }


    public function build()
    {
        return $this->view('emails.order_updated');
    }
}
