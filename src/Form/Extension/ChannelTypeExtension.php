<?php

namespace Scaleflex\SyliusCloudimagePlugin\Form\Extension;

use Scaleflex\SyliusCloudimagePlugin\Form\Type\ImageQualityChoiceType;
use Scaleflex\SyliusCloudimagePlugin\Form\Type\PixelRatioChoiceType;
use Sylius\Bundle\ChannelBundle\Form\Type\ChannelType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class ChannelTypeExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cloudimageStatus', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.status'
            ])
            ->add('cloudimageToken', TextType::class, [
                'required' => false,
                'label' => 'scaleflex_sylius_cloudimage.form.token',
            ])
            ->add('cloudimageDoNotReplaceUrl', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.do_not_replace_url'
            ])
            ->add('cloudimageIgnoreNodeImgSize', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.ignore_node_img_size'
            ])
            ->add('cloudimageIgnoreStyleImageSize', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.ignore_styled_image_size'
            ])
            ->add('cloudImageLazyLoading', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.lazy_load'
            ])
            ->add('cloudimageIgnoreSvg', CheckboxType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.ignore_svg'
            ])
            ->add('cloudimageImageQuality', ImageQualityChoiceType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.image_quality'
            ])
            ->add('cloudimageDevicePixelRatio', PixelRatioChoiceType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.device_pixel_ratio'
            ])
            ->add('cloudimageCustomFunction', TextareaType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.custom_function'
            ])
            ->add('cloudimageLibraryOptions', TextType::class, [
                'required' => false,
                'label'    => 'scaleflex_sylius_cloudimage.form.library_option'
            ])
        ;
    }


    public static function getExtendedTypes(): iterable
    {
        return [ChannelType::class];
    }
}