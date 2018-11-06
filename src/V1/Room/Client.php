<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\Room;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\RequestOptions;
use ZSTU\RozkladClient\V1\ResponseData\Room\RoomSearchResponseData;

/**
 * Class Client
 *
 * @package ZSTU\RozkladClient\V1\Room
 */
class Client
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Client constructor.
     *
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param string $name
     *
     * @return RoomSearchResponseData
     */
    public function search(string $name): RoomSearchResponseData
    {
        $response = $this->httpClient->request('GET', '/room-search', [
            RequestOptions::QUERY => ['name' => $name],
        ]);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        return new RoomSearchResponseData($jsonResponse);
    }
}
