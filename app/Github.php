<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    protected $url = 'https://api.github.com';
    protected $repositories;
    private $service;

    // public function __construct($service)
    // {
    //     $this->service = $service;
    // }

    public function getUserRepositories($username)
    {
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => ['User-Agent: PHP']
            ]
        ];
        
        $context = stream_context_create($opts);
        $response = file_get_contents($this->url. '/users/'.$username.'/repos', false, $context);
        $decodedResponse = json_decode( $response );
        $this->repositories = collect($decodedResponse);
        dd($this->repositories);
        return $this->repositories;
    }
}
