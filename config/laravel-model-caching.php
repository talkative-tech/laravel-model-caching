<?php

return [
    'cache-prefix' => '',

    'disabled' => env('MODEL_CACHE_DISABLED', false),

    'store' => env('MODEL_CACHE_STORE'),

    'timeout' => env('MODEL_CACHE_TIMEOUT'),
];
