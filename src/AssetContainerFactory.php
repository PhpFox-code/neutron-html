<?php

namespace Phpfox\Html;


class AssetContainerFactory
{
    /**
     * @param $class
     * @param $elements
     *
     * @return AssetContainer|mixed
     */
    public function factory($class, $elements)
    {
        return new $class($elements);
    }
}