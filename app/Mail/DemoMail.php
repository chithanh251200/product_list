<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // định nghĩa gửi dữ liệu từ controller wa
    public $data;

    public function __construct($data)
    {
        //
        $this ->data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.demo')
                    ->from('ncthanh258@gmail.com','nguyễn chí thành')
                    ->subject('[unitop] xác nhận đăng ký thành công')
                    ->with($this -> data);
    }
}
