<?php

namespace App\Http\Controllers;
use App\contact_history;
use Mail;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function contactUs(){
        return view('contact-us');
    }

    public function contactusConfirm(){

        /* validate the input */
         $this->validate( request() , array(
          'fullname' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'category' => 'required',
          'subject' => 'required',
          'message' => 'required',
         ));


        /* submit the input into the database */
        $db_data = new contact_history();
        $db_data->fullname = request()->fullname;
        $db_data->email = request()->email;
        $db_data->phone = request()->phone;
        $db_data->category = request()->category;
        $db_data->subject = request()->subject;
        $db_data->message = request()->message;
        $db_data->save();

        /* save the input in data */
          $data = array(
           'fullname' => request()->fullname,
           'email' => request()->email,
           'phone' => request()->phone,
           'category' => request()->category,
           'subject' => request()->subject,
           'description' => request()->message,
           'admin_mail' => 'admin@nardus.ng',
           'created_at' => $db_data->created_at,
          );

        /* send message to the admin */

        Mail::send('emails.contact_notification', $data, function($m) use($data){
        $m->to($data['admin_mail'])->subject('Contact Us Notification');
        });

        /* return back */
        session()->flash('success_report' , 'Contact form submitted successfully!!!');
        return back();
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function services(){
        return view('services');
    }

    public function faq(){
        return view ('faq');
    }

    public function servicesDetails(){
        return view('services-details');
    }
}
