<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'logo' => get_field('Logo', 'options'),
          'nav' => $this->navigation('footer_navigation'),
          'social' => get_field('Social', 'options'),
          'copyright' => get_field('copyright', 'options'),
          'logo_link' => get_field('logo link', 'options'),
          'login' => get_field('login', 'options'),
          'login_logo' => get_field('login logo', 'options'),
          'login_url' => get_field('login url', 'options'),
        ];
    }

    public function navigation($name)
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build($name)->toArray();
    }

}
