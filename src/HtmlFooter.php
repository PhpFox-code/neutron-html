<?php

namespace Phpfox\Html;

/**
 * Class HtmlFooter
 *
 *
 * @package Phpfox\Html
 *
 */
class HtmlFooter
{
    public function __construct()
    {
        $this->map = config('html.footer');
        foreach ($this->map as $k => $v) {
            $this->get($k);
        }
    }
}