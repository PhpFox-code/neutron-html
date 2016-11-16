<?php

namespace Phpfox\ViewAsset;

/**
 * Class AssetManagerFactory
 *
 * @package Phpfox\ViewAsset
 */
class AssetManagerFactory
{
    /**
     * @return AssetManager
     */
    public function factory()
    {
        return new AssetManager();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}