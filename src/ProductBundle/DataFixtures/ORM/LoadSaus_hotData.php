<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\Saus;

class LoadSausData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $mini = new Saus();
        $mini->setName('mini');
        
        $klein = new Saus();
        $klein->setName('klein');
        
        $gewoon = new Saus();
        $gewoon->setName('gewoon');
        
        $groot = new Saus();
        $groot->setName('groot');
        
        $familie = new Saus();
        $familie->setName('familie bak');

        $manager->persist($mini);
        $manager->persist($klein);
        $manager->persist($gewoon);
        $manager->persist($groot);
        $manager->persist($familie);
        $manager->flush();

    }
}

?>