<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\ResponseData\Room;

use Illuminate\Support\Collection;

/**
 * Class RoomCollection
 *
 * @method RoomData[] all()
 *
 * @package ZSTU\RozkladClient\V1\ResponseData\Room
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
