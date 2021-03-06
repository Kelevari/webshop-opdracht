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

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class AssociationEntity
{
    /**
     * @var int
     * @ORM\Id 
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity")
     * @ORM\JoinColumn(name="single_id", referencedColumnName="id")
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity
     */
    public $single;

    /**
     * @ORM\ManyToOne(targetEntity="Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity")
     * @ORM\JoinColumn(name="composite_id1", referencedColumnName="id1")
     * 
     * 
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity
     */
    public $composite;
}
