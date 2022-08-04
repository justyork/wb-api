<?php

namespace App\Services\Visits;

interface VisitsInterface
{
    public function increment(string $countryCode): void;

    public function all(): array;
}
