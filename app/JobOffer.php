<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//Search
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
//

class JobOffer extends Model implements Searchable
{   
    protected $fillable =['title'];

    public function getAllOffersThatAreValidateAndPublic(){
        $sql=DB::table('job_offers')
                ->select(DB::raw('*'))
                ->where('validate','=',1)
                ->where('public','=',1)
                ->get();

        return $sql;
    }

    public function getAllOffers(){
        $sql = DB::table('job_offers')->get();
        return $sql;
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('joboffers.show',$this->id);
            return new SearchResult(
                $this,
                $this->title,
                $url
            );

    }

}
