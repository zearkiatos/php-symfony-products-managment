<?php
namespace App\ProductBundle\Entity;

use App\ProductBundle\DTO\CreateProductRequestDto;
use App\ProductBundle\DTO\CreateProductResponseDto;

class Product
{
    private $id;

    private $name;

    private $reference;

    private $createdAt;

    private function __construct(string $name, string $reference)
    {
        $this->name = $name;
        $this->reference = $reference;
        $this->createdAt = new \DateTime();
    }

    public static function fromDto(CreateProductRequestDto $createProductRequestDto): Product
    {
        return new Product(
            $createProductRequestDto->getName(),
            $createProductRequestDto->getReference()
        );
    }

    public function toDto()
    {
        return new CreateProductResponseDto(
            $this->id,
            $this->name,
            $this->reference,
            $this->createdAt
        );
    }
}
?>
