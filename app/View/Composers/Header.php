<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.header',
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
          'logo_alt' => get_field('Logo Alt', 'options'),
          'navigation' => $this->navigation(),
          'file' => get_field('report', 'options'),
        ];
    }

    public function navigation()
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build()->toArray();
    }

}
