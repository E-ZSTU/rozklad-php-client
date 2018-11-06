<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\ResponseData\Room;

use ZSTU\RozkladClient\V1\ResponseData\Activity\ActivityCollection;
use ZSTU\RozkladClient\V1\ResponseData\Activity\ActivityData;

/**
 * Class RoomScheduleResponseData
 *
 * @package ZSTU\RozkladClient\V1\ResponseData\Room
 */
class RoomScheduleResponseData
{
    /**
     * @var int
     */
    private $roomId;

    /**
     * @var string
     */
    private $roomName;

    /**
     * @var \Illuminate\Support\Collection|ActivityData[]
     */
    private $activities;

    /**
     * ScheduleResponseData constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->roomId = (int) $data['room_id'];
        $this->roomName = (string) $data['room_name'];
        $this->activities = ActivityCollection::make($data['activities']);
    }

    /**
     * @return int
     */
    public function getRoomId(): int
    {
        return $this->roomId;
    }

    /**
     * @return string
     */
    public function getRoomName(): string
    {
        return $this->roomName;
    }

    /**
     * @return ActivityCollection
     */
    public function getActivities(): ActivityCollection
    {
        return $this->activities;
    }
}
