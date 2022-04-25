<?php

declare(strict_types=1);

namespace Tests\Scaleflex\SyliusCloudimagePlugin\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Scaleflex\SyliusCloudimagePlugin\Model\ExtendedChannelInterface;
use Scaleflex\SyliusCloudimagePlugin\Model\ExtendedChannelTrait;
use Sylius\Component\Core\Model\Channel as SyliusChannel;

/**
 * @ORM\Table(name="sylius_channel")
 * @ORM\Entity
 */
class Channel extends SyliusChannel implements ExtendedChannelInterface
{
    use ExtendedChannelTrait;
}