<?php

namespace Phpfox\AssetManager;


/**
 * Class HtmlCode
 *
 * @package Phpfox\AssetManager
 */
class HtmlCode
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param string $html
     *
     * @return $this
     */
    public function append($html)
    {
        $this->data[] = $html;
        return $this;
    }

    /**
     * @param string $html
     *
     * @return $this
     */
    public function prepend($html)
    {
        array_unshift($this->data, $html);
        return $this;
    }

    /**
     * Clear all contents
     *
     * @return $this
     */
    public function clear()
    {
        $this->data = [];
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
     * getHtml content
     *
     * @return string
     */
    public function getHtml()
    {
        return implode(PHP_EOL, $this->data);

    }
}