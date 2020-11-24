<?php

namespace Theme\News\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Theme\Http\Controllers\PublicController;

class NewsController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex(BaseHttpResponse $response)
    {
        return parent::getIndex($response);
    }

    /**
     * {@inheritDoc}
     */
    public function getView(BaseHttpResponse $response, $key = null)
    {
        // var_dump($key);
        return parent::getView($response, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }
}
