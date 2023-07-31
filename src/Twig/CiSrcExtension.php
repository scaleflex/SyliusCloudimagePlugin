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
        if ($this->channelContext->getChannel()->getCloudimageStatus()
            && !empty($this->channelContext->getChannel()->getCloudimageToken())) {

            $isIgnoreSvg = $this->channelContext->getChannel()->getCloudimageIgnoreSvg();
            $ext = pathinfo($imageSource, PATHINFO_EXTENSION);

            if ($this->channelContext->getChannel()->getCloudimagePrerender()) {
                return 'src='.$this->buildUrl($imageSource);
            } else {
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
        return 'src='.$imageSource;
    }

    public function buildUrl($inputUrl) {
        $baseUrl = "//" . $this->channelContext->getChannel()->getCloudimageToken() . ".cloudimg.io/";

        if (!$this->channelContext->getChannel()->getCloudimageRemoveV7()) {
            $baseUrl .= "v7/";
        }

        $flagCheck = false;
        $ciUrl = $baseUrl . $inputUrl . "?";

        if ($this->channelContext->getChannel()->getCloudimageImageQuality() < 100) {
            if (!strpos($ciUrl, "?q=" . $this->channelContext->getChannel()->getCloudimageImageQuality())) {
                $ciUrl .= "q=" . $this->channelContext->getChannel()->getCloudimageImageQuality();
            }
            $flagCheck = true;
        }

        if ($this->channelContext->getChannel()->getCloudimageOrgIfSml()) {
            $configParam = "org_if_sml=1";
            if (!strpos($ciUrl, $configParam)){

                if (substr($ciUrl, -1) === $this->channelContext->getChannel()->getCloudimageImageQuality() . '?') {
                    $ciUrl = substr($ciUrl, 0, -1);
                }
                $ciUrl .= $flagCheck ? "&" . $configParam : $configParam;
            }
            $flagCheck = true;
        }

        return  $flagCheck ? $ciUrl : $baseUrl . $inputUrl;
    }
}
