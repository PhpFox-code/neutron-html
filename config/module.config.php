<?php

namespace Phpfox\ViewAsset;

return [
    'html_header' => [
        'title'          => [null, HeadTitle::class],
        'keywords'       => [null, HeadKeyword::class],
        'meta'           => [null, HeadMeta::class],
        'open_graph'     => [null, HeadOpenGraph::class],
        'links'          => [null, HeadLink::class],
        'styles'         => [null, ExternalStyle::class],
        'inline_styles'  => [null, InlineStyle::class],
        'scripts'        => [null, ExternalScript::class],
        'inline_scripts' => [null, InlineScript::class],
        'html_code'      => [null, HtmlCode::class],
    ],
    'html_footer' => [
        'styles'         => [null, ExternalStyle::class],
        'inline_styles'  => [null, InlineStyle::class],
        'scripts'        => [null, ExternalScript::class],
        'inline_scripts' => [null, InlineScript::class],
        'html_code'      => [null, HtmlCode::class],
    ],
    'services'    => [
        'breadcrumb'                => [
            null,
            Breadcrumb::class,
        ],
        'html_header'               => [
            AssetContainerFactory::class,
            AssetContainer::class,
            'html_header',
        ],
        'html_footer'               => [
            AssetContainerFactory::class,
            AssetContainer::class,
            'html_footer',
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
            HtmlCode::class,
        ],
        'html_code.shutdown'        => [
            null,
            HtmlCode::class,
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