<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\Room\ResponseData;

/**
 * Class RoomData
 *
 * @package ZSTU\RozkladClient\V1\Room\ResponseData
 */
class RoomData
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $room_name;

    /**
     * TeacherData constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (int) $data['id'];
        $this->room_name = (string) $data['room_name'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRoomName(): string
    {
        return $this->room_name;
    }
}