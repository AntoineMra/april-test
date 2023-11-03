<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CustomerRepository;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer extends Contact
{
    #[ORM\Column(type: 'integer')]
    private ?int $customerId = null;

    /**
     * Get the value of customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the value of customerId
     *
     * @return  self
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }
}
