<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity */
class GroupableEntity
{
    /** 
     * @ORM\Id 
     * @ORM\Column(type="integer") */
    protected $id;

    /** 
     * @ORM\Column(type="string", nullable=true) */
    public $name;

    /** 
     * @ORM\Column(type="string", nullable=true) */
    public $groupName;

    public function __construct($id, $name, $groupName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->groupName = $groupName;
    }
}
