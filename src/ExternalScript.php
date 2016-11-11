<?php

namespace Phpfox\AssetManager;

/**
 * Class ExternalScript
 *
 * @package Phpfox\AssetManager
 */
class ExternalScript
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
            'type' => 'text/javascript',
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
            'type' => 'text/javascript',
            'href' => $path,
        ], $props);

        $this->_prepend($key, $props);

        return $this;
    }

}