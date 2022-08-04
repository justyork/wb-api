<?php

namespace App\Services\Storage;

use Illuminate\Support\Facades\Redis;

class RedisStorage implements StorageInterface
{

    public function increment(string $key): void
    {
        Redis::incr($key);
    }

    public function keys(string $key): array
    {
        return collect(Redis::keys($key."*"))
            ->map(fn($key) => \Str::of($key)->after(":")->value())
            ->toArray();
    }

    public function get(string $key): mixed
    {
        return Redis::get($key);
    }

    public function all(string $key): array
    {
        $keys = $this->keys($key);

        return collect($keys)
            ->mapWithKeys(function($itemKey) use ($key) {
                $val = Redis::get($key.$itemKey);
                return [$itemKey => (int)$val];
            })->toArray();
    }
}
