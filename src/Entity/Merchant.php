<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 23.12.17
 * Time: 17:43
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Merchant
 * @package App\Entity
 * @ORM\Entity()
 */
class Merchant extends Cashier
{
    public function getRoles(): array
    {
        return ["ROLE_MERCHANT"];
    }

}