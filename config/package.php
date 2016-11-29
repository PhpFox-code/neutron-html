<?php

namespace Neutron\Html;

return [
    'html.container' => [
        'title'           => [null, HeadTitle::class],
        'headKeyword'     => [null, HeadKeyword::class],
        'headMeta'        => [null, HeadMeta::class],
        'openGraph'       => [null, HeadOpenGraph::class],
        'links'           => [null, HeadLink::class],
        'styles'          => [null, ExternalStyle::class],
        'inlineStyles'    => [null, InlineStyle::class],
        'script'          => [null, ExternalScript::class],
        'startScript'     => [null, InlineScript::class],
        'bootHtml'        => [null, StaticHtml::class],
        'shutdownScripts' => [null, InlineScript::class],
        'breadcrumb'      => [null, Breadcrumb::class,],
    ],
    'services'       => [
        'html' => [null, HtmlFacades::class, null],
    ],
];