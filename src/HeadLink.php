<?php

namespace Phpfox\AssetManager;

/**
 * Class HeadLink
 *
 * @package Phpfox\AssetManager
 */
class HeadLink
{
    use TraitKeyDataExists;

    /**
     * @param string $key
     * @param string $href
     * @param array  $props
     *
     * @return $this
     */
    public function append($key, $href, $props = [])
    {
        if ($this->ensureKey($href)) {
            return $this;
        }

        $props['href'] = $href;
        $this->_append($key, $props);

        return $this;
    }

    /**
     * @param string $key
     * @param string $href
     * @param array  $props
     *
     * @return $this
     */
    public function prepend($key, $href, $props = [])
    {
        if ($this->ensureKey($href)) {
            return $this;
        }

        $props['href'] = $props;

        $this->_prepend($key, $props);

        return $this;
    }


    /**
     * @return string
     */
    public function getHtml()
    {
        $response = [];
        foreach ($this->data as $attributes) {
            if (empty($attributes)) {
                continue;
            }
            $response[] = '<link ' . _attrize($attributes) . '/>';
        }

        return implode(PHP_EOL, $response);
    }
}