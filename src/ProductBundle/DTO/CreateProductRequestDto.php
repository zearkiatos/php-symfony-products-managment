<?php

namespace App\ProductBundle\DTO;

class CreateProductRequestDto
{
    private $name;

    private $reference;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getReference() {
        return $this->reference;
    }

    public function setReference($reference) {
        $this->reference = $reference;
    }

}
