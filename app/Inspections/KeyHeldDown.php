<?php

namespace App\Inspections;

use Exception;

class KeyHeldDown {
    
    /**
     * Checking with regular expression if the body of the
     * comment contains the same letter in a row more
     * than 6 times.
     */

    /**
     * Detect spam
     *
     * @param  string $body
     * @throws \Exception
     */
    public function detect($body)
    {
        if (preg_match('/(.)\\1{6,}/', $body)) {
            throw new Exception("Spam detected.");
        }
    }

}
