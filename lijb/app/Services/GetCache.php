<?php

namespace App\Services;

use App\Cache\Enums\CacheData;
use Illuminate\Support\Facades\Cache;

class GetCache
{
    public function getCache(): array
    {
        $keyCache = app(CacheData::class)->getKeyCache();
        $arrayCache = [];

        foreach ($keyCache as $key){
           $value = Cache::get($key);
            $arrayCache[$key] = $value;
        }

        return $arrayCache;
    }
}
