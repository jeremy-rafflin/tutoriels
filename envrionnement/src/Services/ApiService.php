<?php

namespace App\Services;

class ApiService
{
    public function __construct(private string $apiUrl, private string $nomApplication)
    {
    }

    public function getApiUrl(): string {
        return $this->apiUrl;
    }

    public function getApiResult(): string {
        dump([
            'nomApplication' => $this->nomApplication,
            'apiUrl' => $this->apiUrl,
        ]);
        return '';
    }
}