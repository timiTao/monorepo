<?php

declare(strict_types = 1);

namespace TimiTao\MonoB;

use TimiTao\MonoA\Client;

class Task
{
    public function getClient(): Client
    {
        return new Client();
    }
}
