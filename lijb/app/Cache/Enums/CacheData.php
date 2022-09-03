<?php

namespace App\Cache\Enums;

class CacheData
{
    public $keyCache = ['one', 'two', 'three'];
    public $valueCache = ['a lot of incomprehensible words', 'many more incomprehensible words', 'and again a lot of incomprehensible words', ];


    /**
     * @return string[]
     */
    public function getKeyCache(): array
    {
        return $this->keyCache;
    }

    /**
     * @return string[]
     */
    public function getValueCache(): array
    {
        return $this->valueCache;
    }
}
