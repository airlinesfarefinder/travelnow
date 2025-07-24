<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(877) 694-3693',
        'email_id' => 'info@https://travelnow.deals/',
        'address' => 'Diamond Bar, CA 91789, United States',
        'domain_name' => 'https://travelnow.deals/',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
