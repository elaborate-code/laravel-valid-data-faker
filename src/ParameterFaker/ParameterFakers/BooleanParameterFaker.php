<?php

namespace Elaboratecode\ValidDataFaker\ParameterFaker\ParameterFakers;

use Elaboratecode\ValidDataFaker\ParameterFaker\ParameterFaker;

class BooleanParameterFaker extends ParameterFaker
{
    public function generate(): bool
    {
        return true;
    }
}