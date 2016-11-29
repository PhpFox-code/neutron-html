<?php

namespace Neutron\Html;


class HtmlHeaderTest extends \PHPUnit_Framework_TestCase
{

    public function testFactory()
    {
        $htmlFacades = service('html');

        $this->assertInstanceOf('Neutron\Html\HtmlFacades', $htmlFacades);

        if ($htmlFacades instanceof HtmlFacades) {
            ;
        }

        $htmlFacades->setTitle('test');
    }
}
