<?php
/**
 * Created by PhpStorm.
 * User: Тема
 * Date: 04.02.2019
 * Time: 03:48
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendResume extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    public function __construct( $info ){
        $this->info = $info;
    }

    public function build(){
        return $this->from('info@gidrain.space')
                    ->view('emails.send_resume')
                    ->subject('New Submission');
    }


}