<?php

namespace App\Classes;

use PayPal\Rest\ApiContext;

class PayPal
{
    public function init()
    {
        return new ApiContext;
    }
}
