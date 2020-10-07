<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PostLink extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $postLink = new FieldsBuilder('post_link', [
            'position' => 'side',
            'title' => 'External',
        ]);

        $postLink
            ->setLocation('post_type', '==', 'post')
                ->and('post_format', '==', 'link');

        $postLink
            ->addUrl('external link');

        return $postLink->build();
    }
}
