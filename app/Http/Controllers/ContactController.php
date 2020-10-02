<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Exports\ContactExport;
use Maatwebsite\Excel\Facades\Excel;


class ContactController extends Controller
{
    public function fetch(){
        
        $datas = Contact::all();
        /** Return $datas as a json response object*/
        return response()->json(['message' => $datas]);

    }

    public function update(){

        /** Store Incoming request in a variable */
        $id = request()->id;
        $fullname = request()->fullname;
        $phone = request()->phone;
        $email = request()->email;
        $category = request()->category;
        $subject = request()->subject;
        $message = request()->message;

        /** Find id , update data and save */
        $data = Contact::find($id);

        $data->fullname = $fullname;
        $data->phone = $phone;
        $data->email = $email;
        $data->category = $category;
        $data->subject = $subject;
        $data->message = $message;

        $data->save();

        /** Return a json response object */
        return response()->json(['message' => 'Updated Successfully']);

    }

    public function delete(){
        /** Store request coming in as a variable */
      $id = request()->id;

      /** Find and delete data */
      Contact::find($id)->delete();

      /** Return a json response object */
      return response()->json(['message' => 'Deleted Successfully']);
    }

    public function exportable(){
       return Excel::download(new ContactExport, 'contact.xlsx');
    }
}
