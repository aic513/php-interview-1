<?php
namespace DI;

interface RequestInterface
{
    public function request(string $url, string $method, array $options = null);
}