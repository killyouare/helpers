<?php

namespace Killyouare\Helpers;

interface ValidatorInterface
{
    public static function validate(
        array $attributes,
        array $rules
    ): void;
}
