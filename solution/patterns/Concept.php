<?php

class Concept
{
    private $client;

    private const STORAGE_TYPE = 'in file';

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function getUserData()
    {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->getSecretKey()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
    }

    //если раскручивать по полной, то это стратегия
    public function getSecretKey()
    {
        $secret = '';
        if (self::STORAGE_TYPE === 'in file') {
            $secret .= '{//some code}';
        } elseif (self::STORAGE_TYPE === 'in db') {
            $secret .= '{//some code}';
        } elseif (self::STORAGE_TYPE === 'in cloud') {
            $secret .= '{//some code}';
        }
        return $secret;
    }


}