<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Resilience extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Resilience';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            'content' => get_field('content'),
            'link' => get_field('more'),
            'bg' => get_field('bg'),
            'stories' => $this->stories(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $resilience = new FieldsBuilder('resilience');

        $resilience
            ->addText('title')
            ->addTextarea('content')
            ->addText('post count')
            ->addLink('more')
            ->addColorPicker('bg');

        return $resilience->build();
    }

    public function stories() {
        $count = (get_field('post count')) ? get_field('post count') : -1;
        $args = [
            'posts_per_page' => $count,
            'post_type' => 'story'
        ];

        $data = [];

        $wp_query = new \WP_Query($args);

        foreach($wp_query->posts as $post) {

            $data[] = [
                'title' => get_the_title($post->ID),
                'location' => get_field('location', $post->ID),
                'url' => get_field('website', $post->ID),
                'image' => get_field('image', $post->ID)['url'],
                'link' => get_field('link', $post->ID),
                // 'terms' => $terms,
            ];

        }

        return $data;
    }


}
