<?php


namespace App\Service;
use App\Entity\IntegratorProduct;
use App\Model\Offer;
use Doctrine\ORM\EntityManagerInterface;


class ProductMapper
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function getDataAction()
    {


        return true;
    }
}