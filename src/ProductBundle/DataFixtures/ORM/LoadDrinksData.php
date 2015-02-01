<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\Drinks;

class LoadDrinksData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $cola = new Drinks();
        $cola->setName('cola');
        $cola->setPrice(1.50);
        $cola->setAvailable(true);
        
        $cola_light = new Drinks();
        $cola_light->setName('cola light');
        $cola_light->setPrice(1.50);
        $cola_light->setAvailable(true);
        
        $cola_zero = new Drinks();
        $cola_zero->setName('cola zero');
        $cola_zero->setPrice(1.50);
        $cola_zero->setAvailable(true);
        
        $fanta = new Drinks();
        $fanta->setName('fanta');
        $fanta->setPrice(1.50);
        $fanta->setAvailable(true);
        
        $sprite = new Drinks();
        $sprite->setName('sprite');
        $sprite->setPrice(1.50);
        $sprite->setAvailable(true);
        
        $ice_tea = new Drinks();
        $ice_tea->setName('ice tea');
        $ice_tea->setPrice(1.70);
        $ice_tea->setAvailable(true);
        
        $schweppes = new Drinks();
        $schweppes->setName('schweppes');
        $schweppes->setPrice(1.70);
        $schweppes->setAvailable(true);
        
        $gini = new Drinks();
        $gini->setName('gini');
        $gini->setPrice(1.70);
        $gini->setAvailable(true);
        
        $cecemel = new Drinks();
        $cecemel->setName('cecemel');
        $cecemel->setPrice(2.00);
        $cecemel->setAvailable(true);
        
        $fristi = new Drinks();
        $fristi->setName('fristi');
        $fristi->setPrice(2.00);
        $fristi->setAvailable(true);
        
        $spa_bruis = new Drinks();
        $spa_bruis->setName('spa bruis');
        $spa_bruis->setPrice(1.00);
        $spa_bruis->setAvailable(true);
        
        $jupiler = new Drinks();
        $jupiler->setName('jupiler');
        $jupiler->setPrice(1.70);
        $jupiler->setAvailable(true);

        $manager->persist($cola);
        $manager->persist($cola_light);
        $manager->persist($cola_zero);
        $manager->persist($fanta);
        $manager->persist($sprite);
        $manager->persist($ice_tea);
        $manager->persist($schweppes);
        $manager->persist($gini);
        $manager->persist($cecemel);
        $manager->persist($fristi);
        $manager->persist($spa_bruis);
        $manager->persist($jupiler);
        $manager->flush();

    }
}

?>