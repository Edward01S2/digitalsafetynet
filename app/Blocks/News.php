<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class News extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'News';

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
            'posts' => $this->posts(), 
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $news = new FieldsBuilder('news');

        $news
            ->addText('title')
            ->addNumber('post count');

        return $news->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function posts()
    {
        $count = get_field('post count');

        $args = array(
            'posts_per_page' => $count,
        );

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();

        $id = get_the_ID();
  
        $post_data[] = [
            'title' => get_the_title(),
            'link' => get_field('external link', $id),
            'image' => get_the_post_thumbnail_url(),
            'content' => get_the_excerpt(),
        ];
  
        endwhile;

        wp_reset_postdata();
  
        return $post_data;
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}