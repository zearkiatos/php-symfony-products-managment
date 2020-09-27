<?php
use Doctrine\ORM\EntityManager;

class ProductRespositoryDoctrineAdapter implements ProductRespositoryInterface
{
    private $productRespository;

    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $entityManager->getRepository(Product::class);
    }

    public function find(string $id): Product
    {
        return $this->productRespository->find($id);
    }

    public function save(Product $product): void
    {
        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }
}
