<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Enum\ContactType;
use App\Repository\ProspectRepository;

#[ORM\Entity(repositoryClass: ProspectRepository::class)]
class Prospect extends Contact
{
    public function __construct()
    {
        $this->setType(ContactType::Prospect);
    }

    #[ORM\Column(length: 255)]
    private ?string $currentSaleProcess = null;

    /**
     * Get the value of currentSaleProcess
     */ 
    public function getCurrentSaleProcess()
    {
        return $this->currentSaleProcess;
    }

    /**
     * Set the value of currentSaleProcess
     *
     * @return  self
     */ 
    public function setCurrentSaleProcess($currentSaleProcess)
    {
        $this->currentSaleProcess = $currentSaleProcess;

        return $this;
    }
}
