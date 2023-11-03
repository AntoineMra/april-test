<?php
namespace App\Entity\Enum;

enum ContactType: string
{
    case Prospect = 'prospect';
    case Customer = 'customer';
}
