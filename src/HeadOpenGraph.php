<?php

namespace Phpfox\ViewAsset;

/**
 * Class HeadOpenGraph
 *
 * @package Phpfox\ViewAsset
 */
class HeadOpenGraph
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param string $property
     * @param string $value
     */
    public function set($property, $value)
    {
        $this->data[$property] = $value;
    }

    /**
     * @param string $property
     *
     * @return $this
     */
    public function remove($property)
    {
        if (isset($this->data[$property])) {
            unset($this->data[$property]);
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function clear()
    {
        $this->data = [];
        return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        $result = [];

        foreach ($this->data as $key => $value) {
            $result[] = sprintf('<meta property="%s" content="%s" />', $key,
                $value);
        }

        return implode(PHP_EOL, $result);
    }
}