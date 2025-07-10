<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(877) 694-3693',
        'email_id' => 'info@demo.com',
        'address' => 'demo, Boston, MA 02109, United States',
        'domain_name' => 'https://demo.com',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
