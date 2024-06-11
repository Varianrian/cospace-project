<?php

return [
    'merchant_id' => env('MIDTRANS_MERCHANT_ID'),
    'client_key' => env('MIDTRANS_CLIENT_KEY'),
    'server_key' => env('MIDTRANS_SERVER_KEY'),

    'sandbox_base_url' => 'https://api.sandbox.midtrans.com/v2',
    'production_base_url' => 'https://api.midtrans.com/v2',
    'snap_sandbox_base_url' => 'https://app.sandbox.midtrans.com/snap/v1',
    'snap_production_base_url' => 'https://app.midtrans.com/snap/v1',

    // This is the default expiration duration for snap token on sandbox mode
    'snap_expiration_duration' => env('MIDTRANS_SNAP_EXPIRATION_DURATION', 5), // in minutes
];
