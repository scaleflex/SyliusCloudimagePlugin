<?php

namespace Scaleflex\SyliusCloudimagePlugin\Model;

use Doctrine\ORM\Mapping as ORM;

trait ExtendedChannelTrait
{
    /** @ORM\Column(type="boolean", name="cloudimage_status", nullable=true, options={"default": 0}) */
    protected $cloudimageStatus;

    /** @ORM\Column(type="string", name="cloudimage_token", nullable=true) */
    protected $cloudimageToken;

    /** @ORM\Column(type="boolean", name="cloudimage_do_not_replace_url", nullable=true, options={"default": 0}) */
    protected $cloudimageDoNotReplaceUrl;

    /** @ORM\Column(type="boolean", name="cloudimage_ignore_node_img_size", nullable=true, options={"default": 0}) */
    protected $cloudimageIgnoreNodeImgSize;

    /** @ORM\Column(type="boolean", name="cloudimage_ignore_style_image_size", nullable=true, options={"default": 0}) */
    protected $cloudimageIgnoreStyleImageSize;

    /** @ORM\Column(type="boolean", name="cloud_image_lazy_loading", nullable=true, options={"default": 1}) */
    protected $cloudImageLazyLoading;

    /** @ORM\Column(type="string", name="cloudimage_custom_function", nullable=true) */
    protected $cloudimageCustomFunction;

    /** @ORM\Column(type="integer", name="cloudimage_image_quality", nullable=true, options={"default": 90}) */
    protected $cloudimageImageQuality;

    /** @ORM\Column(type="boolean", name="cloudimage_ignore_svg", nullable=true, options={"default": 0}) */
    protected $cloudimageIgnoreSvg;

    /** @ORM\Column(type="string", name="cloudimage_device_pixel_ratio", nullable=true, options={"default": "2"}) */
    protected $cloudimageDevicePixelRatio;

    /** @ORM\Column(type="string", name="cloudimage_library_options", nullable=true) */
    protected $cloudimageLibraryOptions;

    /**
     * @return bool|null
     */
    public function getCloudimageStatus(): ?bool
    {
        return $this->cloudimageStatus;
    }

    /**
     * @param bool $status
     * @return void
     */
    public function setCloudimageStatus(bool $status): void
    {
        $this->cloudimageStatus = $status;
    }

    /**
     * @return string|null
     */
    public function getCloudimageToken(): ?string
    {
        return $this->cloudimageToken;
    }

    /**
     * @param string $cloudimageToken
     */
    public function setCloudimageToken(string $cloudimageToken): void
    {
        $this->cloudimageToken = $cloudimageToken;
    }

    /**
     * @return bool|null
     */
    public function getCloudimageDoNotReplaceUrl(): ?bool
    {
        return $this->cloudimageDoNotReplaceUrl;
    }

    /**
     * @param bool $cloudimageDoNotReplaceUrl
     */
    public function setCloudimageDoNotReplaceUrl(bool $cloudimageDoNotReplaceUrl): void
    {
        $this->cloudimageDoNotReplaceUrl = $cloudimageDoNotReplaceUrl;
    }

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreNodeImgSize(): ?bool
    {
        return $this->cloudimageIgnoreNodeImgSize;
    }

    /**
     * @param bool $cloudimageIgnoreNodeImgSize
     */
    public function setCloudimageIgnoreNodeImgSize(bool $cloudimageIgnoreNodeImgSize): void
    {
        $this->cloudimageIgnoreNodeImgSize = $cloudimageIgnoreNodeImgSize;
    }

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreStyleImageSize(): bool
    {
        return $this->cloudimageIgnoreStyleImageSize;
    }

    /**
     * @param bool $cloudimageIgnoreStyleImageSize
     */
    public function setCloudimageIgnoreStyleImageSize(bool $cloudimageIgnoreStyleImageSize): void
    {
        $this->cloudimageIgnoreStyleImageSize = $cloudimageIgnoreStyleImageSize;
    }

    /**
     * @return bool|null
     */
    public function getCloudImageLazyLoading(): ?bool
    {
        return $this->cloudImageLazyLoading;
    }

    /**
     * @param bool $cloudImageLazyLoading
     */
    public function setCloudImageLazyLoading(bool $cloudImageLazyLoading): void
    {
        $this->cloudImageLazyLoading = $cloudImageLazyLoading;
    }

    /**
     * @return string|null
     */
    public function getCloudimageCustomFunction(): ?string
    {
        return $this->cloudimageCustomFunction;
    }

    /**
     * @param string $cloudimageCustomFunction
     */
    public function setCloudimageCustomFunction(string $cloudimageCustomFunction): void
    {
        $this->cloudimageCustomFunction = $cloudimageCustomFunction;
    }

    /**
     * @return int|null
     */
    public function getCloudimageImageQuality(): ?int
    {
        return $this->cloudimageImageQuality;
    }

    /**
     * @param int $cloudimageImageQuality
     */
    public function setCloudimageImageQuality(int $cloudimageImageQuality): void
    {
        $this->cloudimageImageQuality = $cloudimageImageQuality;
    }

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreSvg(): ?bool
    {
        return $this->cloudimageIgnoreSvg;
    }

    /**
     * @param bool $cloudimageIgnoreSvg
     */
    public function setCloudimageIgnoreSvg(bool $cloudimageIgnoreSvg): void
    {
        $this->cloudimageIgnoreSvg = $cloudimageIgnoreSvg;
    }

    /**
     * @return string|null
     */
    public function getCloudimageDevicePixelRatio(): ?string
    {
        return $this->cloudimageDevicePixelRatio;
    }

    /**
     * @param string $cloudimageDevicePixelRatio
     */
    public function setCloudimageDevicePixelRatio(string $cloudimageDevicePixelRatio): void
    {
        $this->cloudimageDevicePixelRatio = $cloudimageDevicePixelRatio;
    }

    /**
     * @return string|null
     */
    public function getCloudimageLibraryOptions(): ?string
    {
        return $this->cloudimageLibraryOptions;
    }

    /**
     * @param string $cloudimageLibraryOptions
     */
    public function setCloudimageLibraryOptions(string $cloudimageLibraryOptions): void
    {
        $this->cloudimageLibraryOptions = $cloudimageLibraryOptions;
    }
}
