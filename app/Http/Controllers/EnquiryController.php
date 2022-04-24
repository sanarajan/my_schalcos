<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{
    //createinsert enquiry and view contact page
    public function index(Request $req){
        if($req->isMethod("post")){
            //print_r($req->all());
            //validation
           $validate = Validator::make($req->all(),[
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|unique:enquiries,email',
            'phone' => 'required|numeric|digits_between:9,11',
            'message' => 'required',
         ])->validate() ;
         //another validation
         //if($validate->fail()){
            // return redirect('contact')->withErrors($validate)->withInput()    use this or
         //   return redirect('contact')->withErrors($validate)->withInput()   use this
        // }
            $enq_obj = new Enquiry();
            //setting values for insert
            $enq_obj->name = $req->name; //$enq_obj->name = table column name and $req->name=posted data from form
            $enq_obj->phone = $req->phone;
            $enq_obj->email = $req->email;
            $enq_obj->message = $req->message;
            //save data
            $enq_obj->save();
            //set flash success message
            //session()->flash('key','Enquiry submitted successfully');
            $req->session()->flash('success','Enquiry send successfully');
            return redirect('contact');
           // return back()->with('info','Item created successfully, Follow another step!');  
            


           
        }
        return view("contact");
    }

   /* public function submit_enquiry(Request $requ){
       
            $validatedData = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|unique:enquiries,email',
                'phone' => 'required|numeric|digits_between:9,11',
                'message' => 'required',
                
            ]);
            if($validatedData->fails()){
                return redirect('index')->withErrors($validatedData)->withInput();
            }else{
                $data_array=[
                    "name"=>$request->name,
                    "phone"=>$request->phone,
                    "email"=>$request->email,
                    "message"=>$request->message

                ];



            }

    }*/
}
