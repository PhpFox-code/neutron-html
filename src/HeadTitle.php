<?php

namespace Phpfox\ViewAsset;

/**
 * Class HeadTitle
 *
 * Control content of &gt;title&lt; tag.
 *
 * @package Phpfox\ViewAsset
 */
class HeadTitle
{

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string
     */
    protected $separator = '-';

    /**
     * Append a string to head title.
     *
     * @param string $data
     *
     * @return $this
     */
    public function append($data)
    {
        $this->data[] = (string)$data;

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
     * Empty title string
     *
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
        return '<title>' . $this->__toString() . '</title>';
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $response = [];

        foreach ($this->data as $string) {
            $response[] = $string;
        }

        return implode($this->separator, $response);
    }

    /**
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * @param string $separator
     */
    public function setSeparator($separator)
    {
        $this->separator = $separator;
    }
}