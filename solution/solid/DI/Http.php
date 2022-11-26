<?php

namespace DI;

class Http
{
    private $service;

    public function __construct(RequestInterface $service)
    {
        $this->service = $service;
    }

    public function get(string $url, array $options)
    {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url)
    {
        $this->service->request($url, 'GET');
    }
}