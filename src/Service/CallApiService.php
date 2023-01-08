<?php

namespace App\Service;


use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CallApiService extends AbstractController
{
    private $client;
    
    public function __construct(HttpClientInterface $client)
    {
        $this->client= $client;
    }

    public function getContribute($slug): array{
        $response = $this->client->request(
            'GET',
            'https://maps.googleapis.com/maps/api/place/nearbysearch/json?language=fr&location='.$slug.'&radius=1000&type=clothing_store|restaurant&key='
        );
        $statusCode = $response->getStatusCode();
        $contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $content;
    }
}