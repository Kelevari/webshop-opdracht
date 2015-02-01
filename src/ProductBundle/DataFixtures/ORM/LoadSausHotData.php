<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\SausHot;

class LoadSausHotData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $stoofvleessaus = new SausHot();
        $stoofvleessaus->setName('stoofvleessaus');
        $stoofvleessaus->setAvailable(true);
        
        $currysaus = new SausHot();
        $currysaus->setName('currysaus');
        $currysaus->setAvailable(true);
        
        $pindasaus = new SausHot();
        $pindasaus->setName('pindasaus');
        $pindasaus->setAvailable(true);

        $manager->persist($stoofvleessaus);
        $manager->persist($currysaus);
        $manager->persist($pindasaus);
        $manager->flush();

    }
}

?>