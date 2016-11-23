<?php

namespace Phpfox\Html;

return [
    'html.header' => [
        'html.header.title'         => [null, HeadTitle::class],
        'html.header.keyword'       => [null, HeadKeyword::class],
        'html.header.meta'          => [null, HeadMeta::class],
        'html.header.open_graph'    => [null, HeadOpenGraph::class],
        'html.header.link'          => [null, HeadLink::class],
        'html.header.style'         => [null, ExternalStyle::class],
        'html.header.inline_style'  => [null, InlineStyle::class],
        'html.header.script'        => [null, ExternalScript::class],
        'html.header.inline_script' => [null, InlineScript::class],
        'html.header.static_html'   => [null, StaticHtml::class],
    ],
    'html.footer' => [
        'script'         => [null, ExternalScript::class],
        'inline_scripts' => [null, InlineScript::class],
        'static_html'    => [null, StaticHtml::class],
    ],
    'services'    => [
        'breadcrumb'                => [
            null,
            Breadcrumb::class,
        ],
        'html.header'               => [
            null,
            HtmlHeader::class,
        ],
        'html.footer'               => [
            null,
            HtmlFooter::class,
        ],
        'head.title'                => [
            null,
            HeadTitle::class,
        ],
        'head.meta'                 => [
            null,
            HeadMeta::class,
        ],
        'head.open_graph'           => [
            null,
            HeadOpenGraph::class,
        ],
        'head.links'                => [
            null,
            HeadLink::class,
        ],
        'html_code.start'           => [
            null,
            StaticHtml::class,
        ],
        'html_code.shutdown'        => [
            null,
            StaticHtml::class,
        ],
        'external_scripts.start'    => [
            null,
            ExternalScript::class,
        ],
        'inline_scripts.start'      => [
            null,
            InlineScript::class,
        ],
        'external_styles.start'     => [
            null,
            ExternalStyle::class,
        ],
        'inline_styles.start'       => [
            null,
            InlineStyle::class,
        ],
        'head.keywords'             => [
            null,
            HeadKeyword::class,
        ],
        'inline_scripts.shutdown'   => [
            null,
            InlineScript::class,
        ],
        'external_scripts.shutdown' => [
            null,
            ExternalScript::class,
        ],
        'inline_styles.shutdown'    => [
            null,
            InlineStyle::class,
        ],
    ],
];