<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    public function getPage($zone_category)
    {   
        switch ($zone_category) {
            case "residential":
                $output = "residential";
                return view('zones.content_boxes')->with('zone_category',$output); 
            case "corporate":
                $output = "corporate";
                return view('zones.content_boxes')->with('zone_category',$output); 
            case "hospitality":
                $output = "hospitality";
                return view('zones.content_boxes')->with('zone_category',$output); 
            case "commercial":
                $output = "commercial";
                return view('zones.content_boxes')->with('zone_category',$output);     
            case "education":
                $output = "education";
                return view('zones.content_boxes')->with('zone_category',$output);         
        }
    }    
}