<?php
namespace Eticsoft\Paythor\Garantibbva;

class EticContext
{
    public static function get($key)
    {   
        return \Context::getContext()->$key;
    }
}