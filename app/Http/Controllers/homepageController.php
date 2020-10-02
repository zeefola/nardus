<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Distributor;
use App\Faq;
use Mail;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class homepageController extends Controller
{
    public function home(){
        SEOTools::setTitle('Pure Aroma from Nature');
        SEOTools::setDescription('Experience the sheer potency of a natural essential oil derived through the most ethical extraction and purification process. We offer an extensive line of essential oils and lemongrass-based domestic products.');
        
        return view('welcome');
    }
    
    public function contactUs(){
        SEOTools::setTitle('Contact Us');
        SEOTools::setDescription('For enquiries, complaints and more details about our products and services, you can get in touch with us via our contact center by sending us a mail or through a phone call.');
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
        $db_data = new Contact();
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
        SEOTools::setTitle('About Us');
        SEOTools::setDescription('We are a global supplier of essential oils into the flavour, fragrance and cosmetic industries. We offer customers an extensive line of essential oils and lemongrass-based domestic products.');
        return view('about-us');
    }

    public function services(){
        SEOTools::setTitle('Services');
        SEOTools::setDescription('We are into production and supply of natural essential oils and lemongrass-based domestic products, formulation of flavours and customisation of fragrance with focus on promoting a healthier world.');

        $datas = \App\Repositories\Services::getServices();
        return view('services')->with('datas' , $datas);
    }

    public function faq(){

        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('We have put together some of our frequently asked questions for you, get related answers to some of your questions from our most frequently asked questions here.');
        // SEOTools::opengraph()->setUrl('http://current.url.com');
        // SEOTools::setCanonical('https://codecasts.com.br/lesson');
        // SEOTools::opengraph()->addProperty('type', 'articles');
        // SEOTools::twitter()->setSite('@LuizVinicius73');
        // SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        
        $datas = Faq::all();
        return view ('faq')->with('datas' , $datas);
    }

    public function distributorsForm(){
        SEOTools::setTitle('Distributors Form');
        SEOTools::setDescription('You are just a step away from enjoying amazing offers from us! Kindly fill in your details below and ensure you submit your data, our customer representative will contact you soon.');
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
        $db_data = new Distributor();
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
        SEOTools::setTitle('Lemongrass Essential Oil');
        SEOTools::setDescription('Natural essential oil derived through the most ethical extraction and purification process. Our pure lemongrass essential oil is ideal for aromatherapy, food and helps improve life quality.');
       
        return view('essential-oil');
    }

    public function hydrosol(){
        SEOTools::setTitle('Lemongrass Hydrosol');
        SEOTools::setDescription('Produced by steam-distilling organic lemongrass plant. Highly effective in the sterilisation of bathrooms, sinks, toilet seats, furniture, and floors, leaving an aromatic citrusy lemon scent.');

        return view('hydrosol');
    }

    public function handSanitizer(){
        SEOTools::setTitle('Lemongrass Hand Sanitizer');
        SEOTools::setDescription('An alcohol-based gelatinous solution made with lemongrass essential oil blended with other organic powerful disinfecting agents. It helps prevent the risk of infection while improving the cosmetic effect of your skin.');

        return view('hand-sanitizer');
    }
}
