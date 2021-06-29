<?php

namespace Vnn\WpApiClient\Endpoint;

/**
 * Class Settings
 * @package Vnn\WpApiClient\Endpoint
 */
class Sites extends AbstractWpEndpoint
{
    /**
     * {@inheritdoc}
     */
    protected function getEndpoint()
    {
        return '/wp-json/wp/v2/sites';
    }
}
