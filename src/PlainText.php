<?php

namespace Digitalazgroup\PlainText;

use Laravel\Nova\Fields\Field;

class PlainText extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'plain-text';

    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }

    public function asText()
    {
        return $this->withMeta(['asHtml' => false]);
    }
}
