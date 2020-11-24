<?php

namespace Theme\Themedemo\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Theme\Http\Controllers\PublicController;
use Theme;

class ThemedemoController extends PublicController
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
        return parent::getView($response, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }

    public function getServices()
    {
        Theme::breadcrumb()->add('Home', 'http://localhost:8000')->add('Services','http://localhost:8000/services');
        return Theme::scope('services')->render();
    }

    public function getContact()
    {
        Theme::breadcrumb()->add('Home', 'http://localhost:8000')->add('Contact us','http://localhost:8000/contact');
        return Theme::scope('contact')->render();
    }

    public function getBlog()
    {
        Theme::breadcrumb()->add('Home', 'http://localhost:8000')->add('Blog','http://localhost:8000/blog');
        return Theme::scope('blog')->render();
    }
}
