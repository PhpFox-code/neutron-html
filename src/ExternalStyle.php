<?php

namespace Phpfox\AssetManager;

/**
 * Class ExternalStyle
 *
 * @package Phpfox\AssetManager
 */
class ExternalStyle
{
    use TraitKeyDataExists;

    /**
     * @param string $key
     * @param string $path
     * @param array  $props
     *
     * @return $this
     */
    public function append($key, $path, $props = [])
    {
        if ($this->ensureKey($path)) {
            return $this;
        }

        $props = array_merge([
            'type' => 'text/css',
            'rel'  => 'stylesheet',
            'href' => $path,
        ], $props);

        $this->_append($key, $props);

        return $this;
    }

    /**
     * @param string $key
     * @param string $path
     * @param array  $props
     *
     * @return $this
     */
    public function prepend($key, $path, $props = [])
    {
        if ($this->ensureKey($path)) {
            return $this;
        }

        $props = array_merge([
            'type' => 'text/css',
            'rel'  => 'stylesheet',
            'href' => $path,
        ], $props);

        $this->_prepend($key, $props);

        return $this;
    }

}