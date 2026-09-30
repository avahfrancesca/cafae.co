<?php

class SystemOperators
{
    public function encrypt($value)
    {
        return base64_encode($value);
    }

    public function decrypt($value)
    {
        return base64_decode($value);
    }
}