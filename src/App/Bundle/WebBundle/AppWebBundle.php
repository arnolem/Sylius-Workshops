<?php

namespace App\Bundle\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppWebBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusWebBundle';
    }
}
