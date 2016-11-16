<?php

namespace Phpfox\ViewAsset;

final class AssetManager
{
    /**
     * @var HeadTitle
     */
    public $headTitle;

    /**
     * @var HeadKeyword
     */
    public $headKeyword;

    /**
     * @var HeadMeta
     */
    public $headMeta;

    /**
     * @var HeadDescription
     */
    public $headDescription;

    /**
     * @var InlineScript
     */
    public $startInlineStyle;

    /**
     * @var InlineStyle
     */
    public $shutdownInlineStyle;

    /**
     * @var ExternalStyle
     */
    public $externalStyle;

    /**
     * @var InlineScript
     */
    public $startInlineScript;

    /**
     * @var InlineScript
     */
    public $shutdownInlineScript;

    /**
     * @var ExternalScript
     */
    public $startExternalScript;

    /**
     * @var HeadLink
     */
    public $headLink;

    /**
     * @var ExternalScript
     */
    public $shutdownExternalScript;

    /**
     * @var HeadOpenGraph
     */
    public $openGraph;

    /**
     * @var HtmlCode
     */
    public $startCode;

    /**
     * @var HtmlCode
     */
    public $shutdownCode;

    /**
     * AssetManager constructor.
     */
    public function __construct()
    {
        $this->inittialize();
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        \app()->emit('onAssetManagerGetHeader', $this);

        return implode(PHP_EOL, array_map(function ($v) {
            return null == $v ? '' : $v->getHtml();
        }, [
            $this->headMeta,
            $this->headTitle,
            $this->headKeyword,
            $this->headDescription,
            $this->startInlineScript,
            $this->externalStyle,
            $this->startInlineScript,
            $this->startExternalScript,
            $this->startCode,
        ]));
    }

    /**
     * @return string
     */
    public function getFooter()
    {
        \app()->emit('onAssetManagerGetFooter', $this);

        $this->shutdownInlineStyle = new InlineStyle();
        $this->shutdownExternalScript = new ExternalScript();
        $this->shutdownInlineScript = new InlineScript();

        return implode(PHP_EOL, array_map(function ($v) {
            return null == $v ? '' : $v->getHtml();
        }, [
            $this->shutdownInlineStyle,
            $this->shutdownExternalScript,
            $this->shutdownInlineScript,
            $this->shutdownCode,
        ]));
    }

    /**
     * @return string
     */
    public function getStartHtml()
    {
        return \app()->setting('platform_core', 'head_script');
    }

    /**
     * @return string
     */
    public function getShutdownHtml()
    {
        return \app()->setting('platform_core', 'head_script');
    }

    /**
     * @ignore
     */
    protected function initialize()
    {
        // header
        $this->headTitle = new HeadTitle();
        $this->headDescription = new HeadDescription();
        $this->headKeyword = new HeadKeyword();
        $this->headLink = new HeadLink();
        $this->openGraph = new HeadOpenGraph();
        $this->startInlineStyle = new InlineStyle();
        $this->externalStyle = new ExternalStyle();
        $this->startInlineScript = new InlineScript();
        $this->startExternalScript = new ExternalScript();
        $this->startCode = new HtmlCode();
        //footer

        $this->shutdownInlineStyle = new InlineStyle();
        $this->shutdownExternalScript = new ExternalScript();
        $this->shutdownInlineScript = new InlineScript();
        $this->shutdownCode = new HtmlCode();

    }
}