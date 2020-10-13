<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DistributorExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Distributor;

class DistributorController extends Controller
{
    public function __construct(){
        $this->middleware('auth.apikey');
    }
    
    public function fetch(){

        $datas = Distributor::latest()->get();

        /**Return a json response object of $data */
        return response()->json(['message' => $datas]);

    }

    public function update(){
        /** Store incoming id in a variable and find */
        $id = request()->id;

        $data = Distributor::find($id);

        /** Store data and save*/
        $data->surname = request()->surname;
        $data->othername = request()->othername;
        $data->phone = request()->phone;
        $data->email = request()->email;
        $data->dob = request()->dob;
        $data->occupation = request()->occupation;
        $data->gender = request()->gender;
        $data->business_address = request()->business_address;
        $data->home_address = request()->home_address;

        $data->save();

        /** Return a json response object */
         return response()->json(['message' => 'Data Updated Successfully']);
    }

    public function delete(){

        /** Incoming request */
        $id = request()->id;

        /** Find Id and delete */
        Distributor::find($id)->delete();
       
        /** Return a json response object */
        return response()->json(['message' => 'Data Deleted Successfully']);

        
    }

    public function exportable() {
      return Excel::download(new DistributorExport, 'distributor.xlsx');
   }


}
