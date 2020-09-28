<?php

namespace App\ProductBundle\Application;

use App\ProductBundle\Entity\Product;
use App\ProductBundle\Repository\ProductRespositoryInterface;
use App\ProductBundle\DTO\CreateProductResponseDto;
use App\ProductBundle\DTO\CreateProductRequestDto;

class ProductApplicationService
{
    private $productRespository;

    public function __construct(ProductRespositoryInterface $productRespository)
    {
        $this->productRespository = $productRespository;
    }

    public function createProduct(CreateProductRequestDto $createProductRequestDto): CreateProductResponseDto
    {
        $product = Product::fromDto($createProductRequestDto);
        $this->productRepository->save($product);
        return $product->toDto();
    }

    public function getProduct($id): CreateProductResponseDto
    {
        $product = $this->productRespository->find($id);
        return $product->toDto();
    }
}
