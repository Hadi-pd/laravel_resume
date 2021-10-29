<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\PersonalInfo;
use App\Models\ProfessionalSkill;
use App\Models\SocialNetwork;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $resume =        PersonalInfo::first();
        $skills =        ProfessionalSkill::all();
        $works =         WorkExperience::all();
        $educations =    Education::all();
        $socialnetwork = SocialNetwork::all();

        set_time_limit(400);
        $pdf = PDF::loadView('site.pdf', compact('resume', 'skills', 'works', 'educations','socialnetwork'));

        return $pdf->download('tutsmake.pdf');

     


    }
}
