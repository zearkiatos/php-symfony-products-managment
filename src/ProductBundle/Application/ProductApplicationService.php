<?php

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
}
