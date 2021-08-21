<?php

namespace App\Inspections;

use Exception;

class InvalidKeywords {

    /**
     * All spam keywords
     *
     * @var array
     */
    protected $keywords = [
        // Message
        'href=',
        '<a ',
        '</a>',
        '</b>',
        'http://',
        'https://',

        // Email
        'revers@o5o5.ru',
        '@o5o5.ru',
    ];

    /**
     * Detect spam
     *
     * @param  string $body
     * @throws \Exception
     */
    public function detect($body)
    {
        foreach ($this->keywords as $keyword) {
            if (stripos($body, $keyword) !== false) {
                throw new Exception("Spam detected.");
            }
        }
    }
}