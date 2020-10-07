<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class About extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.about',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
      return [
        'title' => get_field('about title', 'options'),
        'content' => get_field('about content', 'options'),
        'link' => get_field('join', 'options'),
        'bg' => get_field('about bg', 'options'),
      ];
    }


}
