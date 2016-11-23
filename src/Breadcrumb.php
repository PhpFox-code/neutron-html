<?php

namespace Phpfox\Html;


class Breadcrumb
{
    /**
     * @var array
     */
    protected $elements = [];

    public function prepend($item)
    {
        array_unshift($this->elements, $item);
        return $this;
    }

    public function append($item)
    {
        $this->elements[] = $item;
        return $this;
    }

    public function clear()
    {
        $this->elements = [];
    }
}