<?php

namespace Phpfox\AssetManager;

/**
 * Class AssetManagerFactory
 *
 * @package Phpfox\AssetManager
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