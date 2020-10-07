<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;


class ThemeSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Settings';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeSettings = new FieldsBuilder('theme_settings');

        $themeSettings
            ->addTab('Logos')
                ->addImage('Logo')
                ->addImage('Logo Alt')
            ->addTab('Scripts')
                ->addTextarea('header_scripts', [
                    'label' => 'Header Scripts',
                    'rows' => '15'
                ])
                ->addTextarea('footer_scripts', [
                    'label' => 'Footer Scripts',
                    'rows' => '15'
                ])
            ->addTab('Footer')
                ->addTextarea('copyright')
                ->addLink('logo link')
                ->addText('login')
                ->addImage('login logo')
                ->addUrl('login url')
            ->addTab('Social')
                ->addRepeater('Social')
                    ->addImage('icon')
                    ->addUrl('url')
                    ->addColorPicker('bg')
                ->endRepeater()
            ->addTab('About')
                ->addText('about title')
                ->addWysiwyg('about content')
                ->addLink('join')
                ->addImage('about bg')
            ->addTab('Report')
                ->addLink('report');

        return $themeSettings->build();
    }
}
