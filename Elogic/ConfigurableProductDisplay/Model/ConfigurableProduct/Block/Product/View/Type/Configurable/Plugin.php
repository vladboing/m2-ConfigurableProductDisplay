<?php

namespace Elogic\ConfigurableProductDisplay\Model\ConfigurableProduct\Block\Product\View\Type\Configurable;

/**
 * Class Plugin
 * @package Elogic\ConfigurableProductDisplay\Model\ConfigurableProduct\Block\Product\View\Type\Configurable
 */
class Plugin
{
    /**
     * getAllowProducts
     * @param $subject
     * @return array
     */
    public function beforeGetAllowProducts($subject)
    {
        if (!$subject->hasData('allow_products')) {
            $products = [];
            $allProducts = $subject->getProduct()->getTypeInstance()->getUsedProducts($subject->getProduct(), null);
            foreach ($allProducts as $product) {
                $products[] = $product;
            }
            $subject->setData('allow_products', $products);
        }

        return [];
    }

}