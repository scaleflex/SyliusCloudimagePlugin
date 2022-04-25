<?php

/*
 * This file was created by developers working at Scaleflex
 * Do you need more information about us and what we do? Visit our https://scaleflex.com website!
*/


declare(strict_types=1);

namespace Scaleflex\SyliusCloudimagePlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Sylius\Bundle\ResourceBundle\AbstractResourceBundle;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

final class ScaleflexSyliusCloudimagePlugin extends AbstractResourceBundle
{
    use SyliusPluginTrait;

    public function getSupportedDrivers(): array
    {
        return [
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM,
        ];

    }
}
