<?php

interface ProductRespositoryInterface
{
    public function find(string $id): Product;

    public function save(Product $product): void;
}
