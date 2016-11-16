<?php

namespace Phpfox\ViewAsset;

/**
 * Class HeadKeyword
 *
 * @package Phpfox\ViewAsset
 */
class HeadKeyword
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
     * @return array
     */
    public function getData()
    {
        return $this->data;
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
        return '<meta name="keywords" content="' . htmlentities(implode(',',
            $this->data)) . '"/>';
    }
}