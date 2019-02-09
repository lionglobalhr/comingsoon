<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendResume;

class SendResumeController extends Controller
{
    public $filename;

    public function store( Request $request ){

    	$email_info = (object) array();
        $email_info->username = !empty( $request->input('username') ) ? $request->input('username') : '';
        $email_info->nationality = !empty( $request->input('nationality') ) ? $request->input('nationality') : '';
        $email_info->position = !empty( $request->input('position') ) ? $request->input('position') : '';
        $email_info->industry = !empty( $request->input('industry') ) ? $request->input('industry') : '';

        $available_input = !empty( $request->input('available') ) ? $request->input('available') : '';
        $email_info->available = $available_input == 'Yes' ? 'Available Immediately' : 'Not Available Immediately';

        $email_info->email = !empty( $request->input('email') ) ? $request->input('email') : '';
        $email_info->phone = !empty( $request->input('phone') ) ? $request->input('phone') : '';
        $email_info->filename = '';

        if ( $request->file( 'resume_file' ) && $request->file( 'resume_file' )->isValid() ) {
            $this->filename = $request->file('resume_file')->getClientOriginalName();
            $request->file('resume_file')->move( base_path('public/resume_files'), $this->filename );

            
            $email_info->filename = $this->filename;
        }

        $this->send_resume( $email_info );

        return redirect('/thanks');
    }

    public function send_resume( $mail_info ){
        // Mail::to('zhukotskiy@gmail.com')->send( new SendResume( $mail_info ) );
        Mail::to('d.isaiahjames@gmail.com')->send( new SendResume( $mail_info ) );
    }

}