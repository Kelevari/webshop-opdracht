<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\Fries;

class LoadFriesData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $mini = new Fries();
        $mini->setSize('mini');
        $mini->setPrice(1.10);
        
        $klein = new Fries();
        $klein->setSize('klein');
        $klein->setPrice(1.60);
        
        $gewoon = new Fries();
        $gewoon->setSize('gewoon');
        $gewoon->setPrice(2.00);
        
        $groot = new Fries();
        $groot->setSize('groot');
        $groot->setPrice(2.40);
        
        $familie = new Fries();
        $familie->setSize('familie bak');
        $familie->setPrice(7.00);

        $manager->persist($mini);
        $manager->persist($klein);
        $manager->persist($gewoon);
        $manager->persist($groot);
        $manager->persist($familie);
        $manager->flush();

    }
}

?>