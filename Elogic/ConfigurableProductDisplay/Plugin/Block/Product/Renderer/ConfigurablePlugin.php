<?php

namespace Elogic\ConfigurableProductDisplay\Plugin\Block\Product\Renderer;

use Magento\Swatches\Block\Product\Renderer\Configurable as Configurable;

/**
 * Class ConfigurablePlugin
 * @package Elogic\ConfigurableProductDisplay\Plugin\Block\Product\Renderer
 */
class ConfigurablePlugin
{
    /**
     * Template Path
     */
    const TEMPLATE_PATH = 'Elogic_ConfigurableProductDisplay::product/view/type/options/configurable.phtml';

    /**
     * @param Configurable $subject
     * @param $template
     * @return array
     */
    public function beforeSetTemplate(Configurable $subject, $template)
    {
        return [self::TEMPLATE_PATH];
    }
}