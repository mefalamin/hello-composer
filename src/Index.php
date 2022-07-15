<?php

namespace mefalamin\HelloComposer;

class Index
{
    public function greet($greet = "Hello from Composer package"): string
    {
        return $greet;
    }
}