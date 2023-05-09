<?php

namespace Homeinfo\Deployments\Domain\Dataclasses;

class Address
{
    function __construct(
        public readonly string $street,
        public readonly string $house_number,
        public readonly string $zip_code,
        public readonly string $city,
    )
    {}

    public function __toString(): string
    {
        return $this->street . ' ' . $this->house_number . ', ' . $this->zip_code . ' ' . $this->city;
    }
}