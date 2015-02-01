<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\Size;

class LoadSizeData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $klein = new Size();
        $klein->setSize('klein');
        $klein->setPrice(0.60);
        
        $groot = new Size();
        $groot->setSize('groot');
        $groot->setPrice(1.20);

        $manager->persist($klein);
        $manager->persist($groot);
        $manager->flush();

    }
}

?>