<?php

namespace App\Services\Visits;

use App\Services\Storage\StorageInterface;

class Visits implements VisitsInterface
{
    private const VISITS_KEY = 'visits:';

    public function __construct(protected StorageInterface $storage)
    { }

    public function increment(string $countryCode): void
    {
        $this->storage->increment(self::VISITS_KEY.$countryCode);
    }

    public function all(): array
    {
        return $this->storage->all(self::VISITS_KEY);
    }
}
