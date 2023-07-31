<?php

namespace Scaleflex\SyliusCloudimagePlugin\Model;

interface ExtendedChannelInterface
{
    /**
     * @return bool|null
     */
    public function getCloudimageStatus(): ?bool;

    /**
     * @param bool $status
     * @return void
     */
    public function setCloudimageStatus(bool $status): void;

    /**
     * @return string|null
     */
    public function getCloudimageToken(): ?string;

    /**
     * @param string $cloudimageToken
     */
    public function setCloudimageToken(string $cloudimageToken): void;

    /**
     * @return bool|null
     */
    public function getCloudimageDoNotReplaceUrl(): ?bool;

    /**
     * @param bool $cloudimageDoNotReplaceUrl
     */
    public function setCloudimageDoNotReplaceUrl(bool $cloudimageDoNotReplaceUrl): void;


    /**
     * @return bool|null
     */
    public function getCloudimageRemoveV7(): ?bool;

    /**
     * @param bool $cloudimageRemoveV7
     */
    public function setCloudimageRemoveV7(bool $cloudimageRemoveV7): void;

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreNodeImgSize(): ?bool;

    /**
     * @param bool $cloudimageIgnoreNodeImgSize
     */
    public function setCloudimageIgnoreNodeImgSize(bool $cloudimageIgnoreNodeImgSize): void;

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreStyleImageSize(): ?bool;

    /**
     * @param bool $cloudimageIgnoreStyleImageSize
     */
    public function setCloudimageIgnoreStyleImageSize(bool $cloudimageIgnoreStyleImageSize): void;

    /**
     * @return bool|null
     */
    public function getCloudimageLazyLoading(): ?bool;

    /**
     * @param bool $cloudimagePrerender
     */
    public function setCloudimagePrerender(bool $cloudimagePrerender): void;

    /**
     * @return bool|null
     */
    public function getCloudimagePrerender(): ?bool;


    /**
     * @param bool $cloudimageOrgIfSml
     */
    public function setCloudimageOrgIfSml(bool $cloudimageOrgIfSml): void;

    /**
     * @return bool|null
     */
    public function getCloudimageOrgIfSml(): ?bool;

    /**
     * @param bool $cloudimageLazyLoading
     */
    public function setCloudimageLazyLoading(bool $cloudimageLazyLoading): void;

    /**
     * @return string|null
     */
    public function getCloudimageCustomFunction(): ?string;

    /**
     * @param string $cloudimageCustomFunction
     */
    public function setCloudimageCustomFunction(string $cloudimageCustomFunction): void;

    /**
     * @return int|null
     */
    public function getCloudimageImageQuality(): ?int;

    /**
     * @param int $cloudimageImageQuality
     */
    public function setCloudimageImageQuality(int $cloudimageImageQuality): void;

    /**
     * @return bool|null
     */
    public function getCloudimageIgnoreSvg(): ?bool;

    /**
     * @param bool $cloudimageIgnoreSvg
     */
    public function setCloudimageIgnoreSvg(bool $cloudimageIgnoreSvg): void;

    /**
     * @return string|null
     */
    public function getCloudimageDevicePixelRatio(): ?string;

    /**
     * @param string $cloudimageDevicePixelRatio
     */
    public function setCloudimageDevicePixelRatio(string $cloudimageDevicePixelRatio): void;

    /**
     * @return string|null
     */
    public function getCloudimageLibraryOptions(): ?string;

    /**
     * @param string $cloudimageLibraryOptions
     */
    public function setCloudimageLibraryOptions(string $cloudimageLibraryOptions): void;
}
