<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function getPage($plan_category)
    {   
        switch ($plan_category) {
            case "basic":
                $output = "basic";
                return view('plans.pricing')->with('plan_category',$output); 
            case "lite":
                $output = "lite";
                return view('plans.pricing')->with('plan_category',$output); 
            case "standard":
                $output = "stardard";
                return view('plans.pricing')->with('plan_category',$output); 
            case "advanced":
                $output = "advanced";
                return view('plans.pricing')->with('plan_category',$output);
            case "elite":
                $output = "elite";
                return view('plans.pricing')->with('plan_category',$output);                    
        }
    }    
}