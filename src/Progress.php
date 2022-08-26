<?php

namespace Masoudi\Nova\Fields;

use Laravel\Nova\Fields\Number;

class Progress extends Number
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-progress-field';

    /**
     * Resolve the field's value using the display callback.
     *
     * @param  mixed  $value
     * @param  mixed  $resource
     * @param  string  $attribute
     * @return void
     */
    protected function resolveUsingDisplayCallback($value, $resource, $attribute)
    {
        $this->usesCustomizedDisplay = true;
        $this->withMeta(['original_value' => $value]);
        $this->value = call_user_func($this->displayCallback, $value, $resource, $attribute);
    }
}
