<?php

namespace Phpfox\ViewAsset;

/**
 * Class HeadDescription
 *
 * @package Phpfox\ViewAsset
 */
class HeadDescription
{

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param string $data
     *
     * @return $this
     */
    public function append($data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function prepend($data)
    {
        array_unshift($this->data, $data);
        return $this;
    }

    /**
     * @return $this
     */
    public function clear()
    {
        return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return '<meta name="description" content="' . htmlentities(implode(',',
            $this->data)) . '"/>';
    }

}