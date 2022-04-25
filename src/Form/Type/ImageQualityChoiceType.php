<?php

namespace Scaleflex\SyliusCloudimagePlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\Options;

final class ImageQualityChoiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => function (Options $options) {
                $imageQualities = [];
                for($i = 1; $i < 100; $i++) {
                    $imageQualities[$i] = $i;
                }
                return $imageQualities;
            },
            'placeholder' => false
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return ChoiceType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'scaleflex_sylius_cloudimage_image_quality_choice';
    }
}