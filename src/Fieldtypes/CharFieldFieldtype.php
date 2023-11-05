<?php

namespace AppsWithLove\Statamic\CharField\Fieldtypes;

use Statamic\Fields\Fieldtype;

class CharFieldFieldtype extends Fieldtype
{
    protected $icon = 'integer';

    protected function configFieldItems(): array
    {
        return [
            'input_type' => [
                'display' => __('charfield.input_type'),
                'type' => 'select',
                'default' => 'input',
                'options' => [
                    'text' => 'Input',
                    'textarea' => 'Textarea',
                ]
            ],
            'low' => [
                'display' => __('charfield.low'),
                'type' => 'integer',
                'width' => 50,
            ],
            'high' => [
                'display' => __('charfield.high'),
                'type' => 'integer',
                'width' => 50,
            ],
            'optimal_min' => [
                'display' => __('charfield.optimal_min'),
                'type' => 'integer',
                'width' => 50,
            ],
            'optimal_max' => [
                'display' => __('charfield.optimal_max'),
                'type' => 'integer',
                'width' => 50,
            ],
            'hard_limit' => [
                'display' => __('charfield.hard_limit'),
                'type' => 'integer',
                'width' => 50,
            ],
        ];
    }
}
