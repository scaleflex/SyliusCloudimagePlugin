<?php

namespace Scaleflex\SyliusCloudimagePlugin\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Sylius\Component\Channel\Context\ChannelContextInterface;

class CiSrcExtension extends AbstractExtension
{
    /** @var ChannelContextInterface  */
    protected ChannelContextInterface $channelContext;

    /**
     * @param ChannelContextInterface $channelContext
     */
    public function __construct(
        ChannelContextInterface $channelContext
    ) {
        $this->channelContext = $channelContext;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction(
                'ci_src',
                [$this, 'formatImageSource']
            )
        ];
    }

    /**
     * @param string $imageSource
     * @return string
     */
    public function formatImageSource(string $imageSource): string
    {
        $isIgnoreSvg = $this->channelContext->getChannel()->getCloudimageIgnoreSvg();
        $ext = pathinfo($imageSource, PATHINFO_EXTENSION);

        //Add quality if quality less then 100
        if ($this->channelContext->getChannel()->getCloudimageImageQuality() < 100) {
            $imageSource .= "?q=".$this->channelContext->getChannel()->getCloudimageImageQuality();
        }

        //If prevent SVG is enabled
        if ($isIgnoreSvg && $ext === 'svg') {
            return 'src='.$imageSource;
        }

        return 'ci-src='.$imageSource;
    }
}
