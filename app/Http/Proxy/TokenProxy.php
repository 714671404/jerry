<?php
namespace App\Http\Proxy;

use App\Helpers\ApiResponse;
use GuzzleHttp\Client;

class TokenProxy
{
    //
    use ApiResponse;

    protected $http;

    public function __construct()
    {
        $this->http = new Client([
            'base_url' => env('API_URL'),
            'timeout'  => 2.0
        ]);
    }

    public function proxy($grantType, array $data)
    {
        $form_params = array_merge([
            'client_id' => env('PASSPORT_CLIENT_ID'),
            'client_secret' => env('PASSPORT_CLIENT_SECRET'),
            'grant_type' => $grantType
        ], $data);

        $url = env('API_URL') . '/oauth/token';
    }
}
