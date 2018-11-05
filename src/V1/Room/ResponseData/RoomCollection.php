<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\Room\ResponseData;

use Illuminate\Support\Collection;

/**
 * Class TeacherCollection
 *
 * @method RoomData[] all()
 *
 * @package ZSTU\RozkladClient\V1\Teacher\ResponseData
 */
class RoomCollection extends Collection
{
    /**
     * @param array $items
     *
     * @return $this|Collection|RoomData[]
     */
    public static function make($items = [])
    {
        if (\is_array($items)) {
            $items = array_map(function ($item) {
                return new RoomData($item);
            }, $items);
        }

        return parent::make($items);
    }
}
