<?php

namespace Elogic\ConfigurableProductDisplay\Plugin\Model;

use Magento\ConfigurableProduct\Model\AttributeOptionProvider as AttributeOptionProviderParent;

/**
 * Class AttributeOptionProvider
 *
 * @package Elogic\ConfigurableProductDisplay\Plugin\Model
 */
class AttributeOptionProvider
{
    /**
     * After plugin for getAttributeOptions method adding "Out of Stock" text.
     *
     * @param AttributeOptionProviderParent $subject
     * @param array $result
     * @return array
     */
    public function afterGetAttributeOptions(AttributeOptionProviderParent $subject, array $result)
    {
        $optiondata=array();
        foreach ($result as $option) {

            if($option['stock_status'] == 0){
                $option['option_title']  = $option['option_title'].__(' - Out of Stock');
            }
            $optiondata[]=$option;
        }
        return $optiondata;
    }
}