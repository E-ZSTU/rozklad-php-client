<?php
declare(strict_types = 1);

namespace ZSTU\RozkladClient\V1\Room\ResponseData;

/**
 * Class SearchResponseData
 *
 * @package ZSTU\RozkladClient\V1\Room\ResponseData
 */
class SearchResponseData
{
    /**
     * @var null|RoomData
     */
    private $searched;

    /**
     * @var $this |\Illuminate\Support\Collection|RoomData[]
     */
    private $suggest;

    /**
     * SearchResponseData constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->searched = empty($data['searched']) ? null : new RoomData($data['searched']);
        $this->suggest = RoomCollection::make($data['suggest']);
    }

    /**
     * @return null|RoomData
     */
    public function getSearched(): ?RoomData
    {
        return $this->searched;
    }

    /**
     * @return RoomCollection
     */
    public function getSuggest(): RoomCollection
    {
        return $this->suggest;
    }
}
