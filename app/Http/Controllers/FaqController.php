<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Exports\FaqExport;
use Maatwebsite\Excel\Facades\Excel;


class FaqController extends Controller
{
    
    public function fetch(){
     /** Get all FAQ info and save in $datas */
     $datas = Faq::all();

     /** Create a collection variable */
     $results = collect();

     /** Loop through the info in $data */
     foreach($datas as $data){
      
     /** Push $data info into the collection */
     $results->push([
     'id' => $data->id,
     'question' => $data->question,
     'answer' => $data->answer,
     ]);
     }

     /** Return a json response object */
     return response()->json(['message' => $results]);
    }

    public function create(){
        /** Save incoming request in a variable */
        $id = request()->id;
        $question = request()->question;
        $answer = request()->answer;

        /** Create an instance of the model and save */
         $data = new Faq ();
         $data->id = $id;
         $data->question = $question;
         $data->answer = $answer;
         $data->save();      

        /** Return a json response object */
        return response()->json(['message' => 'Created Successfully']);

    }

    public function update(){

        /** Store the request coming in as a variable */
        $id = request()->id;
        $question = request()->question;
        $answer = request()->answer;

        /** Find id and store data */

        $data = Faq::find($id);

        $data->question = $question;
        $data->answer = $answer;

        $data->save();

        /** Return a json response object */
        return response()->json(['message' => 'Data Updated Succesfully']);

    }

    public function delete(){

        /** Request coming in */
        $id = request()->id;

        /** Find and delete the data */
        Faq::find($id)->delete();

        /** Return a json response object */
        return response()->json(['message' => 'Delete Successfully']);

    }

    public function exportable(){

     return Excel::download(new FaqExport, 'faq.xlsx');
    }
}
