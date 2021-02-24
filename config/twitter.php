<?php

return [
    'client_id' => env('TWITTER_CLIENT_ID', ''),
    'client_secret' => env('TWITTER_CLIENT_SECRET', ''),
    'access_token' => env('TWITTER_CLIENT_ID_ACCESS_TOKEN', ''),
    'access_token_secret' => env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET', ''),
    'call_back_url' => env('CALLBACK_URL', ''),
];
