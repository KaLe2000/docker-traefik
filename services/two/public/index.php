<?php

declare(strict_types=1);

echo \json_encode([
    'service' => 'two',
    'hostname' => $_SERVER['HOSTNAME'],
    'internal_ip' => $_SERVER['SERVER_ADDR'],
]);