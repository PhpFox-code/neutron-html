<?php

namespace Phpfox\Html;

/**
 * Class HtmlHeader
 *
 * @package Phpfox\Html
 */
class HtmlHeader extends HtmlElementContainer
{
    public function __construct()
    {
        $this->map = config('html.header');
        foreach ($this->map as $k => $v) {
            $this->get($k);
        }
    }
}