<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\JobOffer;
use App\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
//use  modelo de searh  

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $offers = new JobOffer();
      
      //TODO: eliminar cuanto tengamos el user real
       $user = new User();
     
       //$isUser = $user->admin;
        /* 
       $beAdmin = $user->setAdmin();
       $notBeAdmin = $user->notAdmin(); */

       
       $jobOffers = $offers->getAllOffers();
        

      
       //if()$user->isAdmin(){
         if($user->isAdmin()){            
             return view('superAdmin',['jobOffers'=>$jobOffers]);
     
         }
        $jobOffers= $offers->getAllOffersThatAreValidateAndPublic();        
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
    public function show(JobOffer $jobOffer,$id)
    {
         
        $offers = JobOffer::find($id);
        return view('jobOfferDetail', ['offer'=>$offers]);
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
     *       
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobOffer $joboffer)
    {
        /* $joboffer->validate = $request->validate;
        $joboffer->save();
        return redirect('joboffers'); */
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


    public function validar(Request $request, JobOffer $joboffer)
    {
        
        $joboffer->validate = $request->validating;
        $joboffer->save();
        return redirect('joboffers');
    }

    public function search(Request $request)
    {
        $searchResults  = (new Search())
            ->registerModel(JobOffer::class,'title','description','url')
            //Más si quiero ->
            ->perform($request->input('query'));

            return view('search',compact('searchResults'));
    }
}
