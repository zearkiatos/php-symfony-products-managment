<?php
namespace App\ProductBundle\Repository;
use App\ProductBundle\Entity\Product;

interface ProductRespositoryInterface
{
    public function find(string $id): Product;

    public function save(Product $product): void;
}
