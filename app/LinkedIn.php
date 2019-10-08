<?php

namespace App;

session_name('linkedin');
session_start();

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class LinkedIn extends Model
{
    protected $url = 'https://api.linkedin.com/v2/companies';
    protected $repositories;
    private $service;

    

    function getAccessToken() 
    {

        $params = array(
            'grant_type' => 'authorization_code',
            'client_id' => '86bnoh8qdwc9ps',
            'client_secret' => '2tVFA6mtfmmbH9Jd',
            'code' => $_GET['code'],
            'redirect_uri' => 'http://127.0.0.1:8000/auth/linkedin/callback/',
        );
     
        // Access Token request
        $url = 'https://www.linkedin.com/oauth/v2/accessToken?' . http_build_query($params);
     
        // Tell streams to make a POST request
        $context = stream_context_create(
                        array('http' => array('method' => 'POST',
                        ))
        );
     
        // Retrieve access token information
        $response = $this->curl($url, false, $context);
     
        // Native PHP object, please
        $token = json_decode($response);
     
        // Store access token and expiration time
        $_SESSION['access_token'] = $token->access_token; // guard this! 
        $_SESSION['expires_in']   = $token->expires_in; // relative time (in seconds)
        $_SESSION['expires_at']   = time() + $_SESSION['expires_in']; // absolute time
        
        if(!$_SESSION['access_token'])
        {
            return false;
        }
        return true;
    }

    public function getCompaniesData()
    {
        $opts = [
            'https' => [
                'method' => 'GET',
                'header' => ['User-Agent: PHP']
            ]
        ];

        $context = stream_context_create($opts);
        $response = file_get_contents($this->url, false, $context);
        $decodedResponse = json_decode( $response );
        $this->repositories = collect($decodedResponse);
        return $this->repositories;
    }
}
