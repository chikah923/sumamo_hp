<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function getPage($solution_category)
    {   
        switch ($solution_category) {
            case "automation":
                $output = "automation";
                return view('solutions.content_boxes')->with('solution_category',$output); 
            case "entertainment":
                $output = "entertainment";
                return view('solutions.content_boxes')->with('solution_category',$output); 
            case "lightning":
                $output = "lightning";
                return view('solutions.content_boxes')->with('solution_category',$output); 
            case "security":
                $output = "security";
                return view('solutions.content_boxes')->with('solution_category',$output);
            case "sensors":
                $output = "sensors";
                return view('solutions.content_boxes')->with('solution_category',$output);
            case "electronics":
                $output = "electronics";
                return view('solutions.content_boxes')->with('solution_category',$output);
            case "networking":
                $output = "networking";
                return view('solutions.content_boxes')->with('solution_category',$output);                 
        }
    }    
}