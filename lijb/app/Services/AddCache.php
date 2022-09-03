<?php

namespace App\Services;

use App\Cache\Enums\CacheData;
use Illuminate\Support\Facades\Cache;

class AddCache
{

    public function addCache(): void
    {
       $keyCache = app(CacheData::class)->getKeyCache();
       $valueCache = app(CacheData::class)->getValueCache();

       foreach ($keyCache as $key=>$item){

           Cache::put($item, $valueCache[$key], now()->addDay());
       }

    }
}
