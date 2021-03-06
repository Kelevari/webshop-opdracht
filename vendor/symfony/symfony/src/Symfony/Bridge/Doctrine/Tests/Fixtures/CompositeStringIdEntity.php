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
class CompositeStringIdEntity
{
    /** 
     * @ORM\Id 
     * @ORM\Column(type="string") */
    protected $id1;

    /** 
     * @ORM\Id 
     * @ORM\Column(type="string") */
    protected $id2;

    /** 
     * @ORM\Column(type="string", nullable=true) */
    public $name;

    public function __construct($id1, $id2, $name)
    {
        $this->id1 = $id1;
        $this->id2 = $id2;
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
