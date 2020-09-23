<?php

namespace App\Http\Controllers;
use App\contact_history;
use App\distributors_registration;
use Mail;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class homepageController extends Controller
{
    public function home(){
        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('This is my page description');
        
        return view('welcome');
    }
    
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
          'g-recaptcha-response' => 'required|captcha'
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
           'admin_mail' => 'info@nardus.ng',
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

        $datas = \App\Repositories\Services::getServices();
        return view('services')->with('datas' , $datas);
    }

    public function faq(){

        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('This is my page description');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        // SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        $datas = \App\Repositories\Pick::getFaq();
        return view ('faq')->with('datas' , $datas);
    }

    public function distributorsForm(){
        return view('distributors-form');
    }

    public function distributorsFormConfirm(){
        /* validate the input */
        $this->validate( request() , array(
          'surname' => 'required',
          'othername' => 'required',
          'phone' => 'required',
          'email' => 'required|email',
          'dob' => 'required',
          'gender' => 'required',
          'occupation' => 'required',
          'home_address' => 'required',
          'business_address' => 'required',
          'g-recaptcha-response' => 'required|captcha'
        ));

        // return request();

        /* store the input into database */
        $db_data = new distributors_registration();
        $db_data->surname = request()->surname;
        $db_data->othername = request()->othername;
        $db_data->phone = request()->phone;
        $db_data->email = request()->email;
        $db_data->dob = request()->dob;
        $db_data->gender = request()->gender;
        $db_data->occupation = request()->occupation;
        $db_data->home_address = request()->home_address;
        $db_data->business_address = request()->business_address;

        $db_data->save();

        /* save the input in data */
        $data = array(
          'surname' => request()->surname,
          'othername' => request()->othername,
          'phone' => request()->phone,
          'email' => request()->email,
          'dob' => request()->dob,
          'gender' => request()->gender,
          'occupation' => request()->occupation,
          'home_address' => request()->home_address,
          'business_address' => request()->business_address,
          'admin_email' => 'info@nardus.ng',
          'created_at' => $db_data->created_at,
        );

        /* send notification email to admin */
         Mail::send('emails.distributor_notification' , $data, function($m) use($data){
             $m->to($data['admin_email'])->subject('Distributor Form Notification');
         });


        /* return back */
        session()->flash('success_report' , 'Form submitted successfully');
        return back();
    }

    public function essentialOil(){
        return view('essential-oil');
    }

    public function hydrosol(){
        return view('hydrosol');
    }

    public function handSanitizer(){
        return view('hand-sanitizer');
    }
}
