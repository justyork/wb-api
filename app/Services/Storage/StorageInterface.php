<?php

namespace App\Services\Storage;

interface StorageInterface
{
    public function increment(string $key): void;

    public function keys(string $key): array;

    public function get(string $key): mixed;

    public function all(string $key): array;
}
