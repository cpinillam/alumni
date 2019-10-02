<?php

namespace App\Http\Controllers;

use App\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $jobOffers = JobOffer::all();
       

       //To Do politica acceso Laravel 
       $coder=false;
         if(!$coder){            
             return view('superAdmin',['joboffer'=>$jobOffers]);
         }        
        return view('jobOffers',['joboffer'=>$jobOffers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'url'=> 'required'

        ]); 

       

        $offer = new JobOffer();
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->url = $request->url;
        

        $offer->save();
       

        return redirect('joboffers'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function show(JobOffer $jobOffer)
    {
         
        $offers = JobOffer::find($id);
        return view('offer-detail', ['offer'=>$offers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(JobOffer $jobOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobOffer $joboffer)
    {
        
        $joboffer->validate = $request->validate; 
        $joboffer->save();
        return redirect('joboffers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobOffer  $jobOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobOffer $joboffer)
    {
        $joboffer->delete(); 
        return redirect('joboffers');
    }
}
