<?php

namespace mefalamin\HelloComposer;

class Index
{
    public function greet($greet = "Hello from Composer updated"): string
    {
        return $greet;
    }
}