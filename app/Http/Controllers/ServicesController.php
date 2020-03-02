<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getPage($service_category)
    {   
        switch ($service_category) {
            case "consultancy":
                $output = "consultancy";
                return view('services.content_boxes')->with('service_category',$output); 
            case "designing":
                $output = "designing";
                return view('services.content_boxes')->with('service_category',$output); 
            case "training_and_skills":
                $output = "training & skills";
                return view('services.content_boxes')->with('service_category',$output); 
            case "maintainance":
                $output = "maintainance";
                return view('services.content_boxes')->with('service_category',$output);                
        }
    }    
}