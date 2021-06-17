<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Settings
 * @package Vnn\WpApiClient\Endpoint
 */
class Settings extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/settings';
    }
}
