<?php

namespace Phpfox\ViewAsset;

/**
 * Class InlineScript
 *
 * @package Phpfox\AssetManager
 */
class InlineScript
{
    use TraitKeyDataExists;


    /**
     * Append inline scripts to header
     *
     * @param string $key
     * @param string $script
     *
     * @return $this
     */
    public function append($key, $script)
    {
        if ($this->ensureKey($script)) {
            return $this;
        }

        $this->_append($key, $script);

        return $this;
    }

    /**
     * @param string $key
     * @param string $script
     *
     * @return $this
     */
    public function prepend($key, $script)
    {
        if ($this->ensureKey($script)) {
            return $this;
        }

        $this->_prepend($key, $script);

        return $this;
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return _sprintf('<$1 type="$2">$3</$1>', [
            'script',
            'text/javascript',
            implode(';', $this->data),
        ]);
    }
}