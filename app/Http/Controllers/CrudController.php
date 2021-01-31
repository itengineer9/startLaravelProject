<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    public function construct(){

    }

    public function getOffer(){
       //return Offer::get();
       return Offer:: select('id', 'name', 'details')->get();
    }

//    public function store(){
//        Offer::create([
//            'name' => 'Omer Offer',
//            'prise' => '800',
//            'details' => 'Omer Offer Details',
//        ]);
//    }

    public function create(){
        return view('offers.create');
    }

    public function store(Request  $req){
        // Validation

        $rules = $this-> getRules();
        $msgs = $this-> getMassegs();
        $validator = Validator::make($req->all(), $rules, $msgs);
        if($validator ->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all());
        }

        //Insert

        Offer::create([
            'name' => $req->name, // name of the filed in the form
            'prise' => $req->prise,
            'details' => $req->details,
        ]);

        return redirect()->back()->with(['success'=>'The Offer added successfully']);
    }

    protected function getRules(){
        return $rules = [
            'name'  => 'required|max:40|unique:offers.name',
            'prise'  => 'required|numeric',
            'details'  => 'required',
        ];
    }

    protected function getMassegs(){
        return $rules = [
            'name.required'  =>__('messages.offer.name.required'),
            'name.unique'  => __('messages.offer.name.unique'),
            'prise.numeric'  => __('messages.offer.prise.numeric'),
            'details.required'  => 'حقل التفاصيل مطلوب',
        ];
    }
}
