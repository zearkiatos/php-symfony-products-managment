<?php

namespace App\ProductBundle\DTO;

class CreateProductResponseDto
{
    private $id;

    private $name;

    private $reference;

    private $createdAt;

    public function __construct($id, $name, $reference, $createdAt)
    {
        $this->id = $id;
        $this->name = $name;
        $this->reference = $reference;
        $this->createdAt = $createdAt;
    }
}