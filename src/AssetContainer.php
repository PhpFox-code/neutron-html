<?php

namespace Phpfox\Html;


class AssetContainer
{
    /**
     * @var array
     */
    protected $elements = [];

    /**
     * @var array
     */
    protected $map = [];

    public function __construct($key)
    {
        $this->map = config($key);

        foreach ($this->map as $k => $v) {
            $this->get($k);
        }

        events()->trigger('onAssertContainerInit', $this);
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return implode(PHP_EOL, array_map(function ($v) {
            return $v->getHtml();
        }, $this->elements));
    }

    /**
     * @param string $id
     * @param mixed  $value
     *
     * @return $this
     */
    public function set($id, $value)
    {
        $this->elements[$id] = $value;

        return $this;
    }

    /**
     * @param  string $id
     *
     * @return mixed
     */
    public function get($id)
    {
        return isset($this->elements[$id]) ? $this->elements[$id]
            : $this->elements[$id] = $this->build($id);
    }

    /**
     * @param string $id
     *
     * @return mixed
     */
    public function build($id)
    {
        if (!isset($this->map[$id])) {
            throw new \InvalidArgumentException("There are no asset type '{$id}'");
        }

        $ref = $this->map[$id];

        $factory = array_shift($ref);

        if (is_string($factory)) {
            return call_user_func_array([
                new $factory(),
                'factory',
            ], $ref);
        }

        $class = array_shift($ref);

        return new $class();

    }

}