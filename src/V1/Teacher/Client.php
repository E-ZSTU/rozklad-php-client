<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\Teacher;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\RequestOptions;
use ZSTU\RozkladClient\V1\ResponseData\Teacher\TeacherScheduleResponseData;
use ZSTU\RozkladClient\V1\ResponseData\Teacher\TeacherSearchResponseData;

/**
 * Class Client
 *
 * @package ZSTU\RozkladClient\V1\Teacher
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
     * @return TeacherSearchResponseData
     */
    public function search(string $name): TeacherSearchResponseData
    {
        $response = $this->httpClient->request('GET', '/teacher-search', [
            RequestOptions::QUERY => ['name' => $name],
        ]);
        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        return new TeacherSearchResponseData($jsonResponse);
    }

    /**
     * @param int $id
     *
     * @return TeacherScheduleResponseData
     */
    public function schedule(int $id): TeacherScheduleResponseData
    {
        $response = $this->httpClient->request('GET', "/teacher-schedule/$id");

        $jsonResponse = json_decode($response->getBody()->getContents(), true);

        return new TeacherScheduleResponseData($jsonResponse);
    }
}
