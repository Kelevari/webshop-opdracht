<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\SausCold;

class LoadSausColdData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $mayonaise = new SausCold();
        $mayonaise->setName('mayonaise');
        $mayonaise->setAvailable(true);
        
        $ketchup = new SausCold();
        $ketchup->setName('ketchup');
        $ketchup->setAvailable(true);
        
        $curry_ketchup = new SausCold();
        $curry_ketchup->setName('curry ketchup');
        $curry_ketchup->setAvailable(true);
        
        $curry = new SausCold();
        $curry->setName('curry');
        $curry->setAvailable(true);
        
        $mammoet = new SausCold();
        $mammoet->setName('mammoet');
        $mammoet->setAvailable(true);
        
        $frietsaus = new SausCold();
        $frietsaus->setName('frietsaus');
        $frietsaus->setAvailable(true);
        
        $tartaar = new SausCold();
        $tartaar->setName('tartaar');
        $tartaar->setAvailable(true);
        
        $cocktail = new SausCold();
        $cocktail->setName('cocktail');
        $cocktail->setAvailable(true);
        
        $tomataise = new SausCold();
        $tomataise->setName('tomataise');
        $tomataise->setAvailable(true);
        
        $andalouse = new SausCold();
        $andalouse->setName('andalouse');
        $andalouse->setAvailable(true);
        
        $look = new SausCold();
        $look->setName('look');
        $look->setAvailable(true);
        
        $samurai = new SausCold();
        $samurai->setName('samurai');
        $samurai->setAvailable(true);
        
        $hannibal = new SausCold();
        $hannibal->setName('hannibal');
        $hannibal->setAvailable(true);
        
        $joppie = new SausCold();
        $joppie->setName('joppie');
        $joppie->setAvailable(true);
        
        $bickysaus = new SausCold();
        $bickysaus->setName('bickysaus');
        $bickysaus->setAvailable(true);
        
        $bbqsaus = new SausCold();
        $bbqsaus->setName('bbqsaus');
        $bbqsaus->setAvailable(true);
        
        $specialsaus = new SausCold();
        $specialsaus->setName('specialsaus');
        $specialsaus->setAvailable(true);
        
        $amerikaanse = new SausCold();
        $amerikaanse->setName('amerikaanse');
        $amerikaanse->setAvailable(true);
        
        $pickels = new SausCold();
        $pickels->setName('pickels');
        $pickels->setAvailable(true);
        
        $mosterd = new SausCold();
        $mosterd->setName('mosterd');
        $mosterd->setAvailable(true);
        
        $pepersaus = new SausCold();
        $pepersaus->setName('pepersaus');
        $pepersaus->setAvailable(true);
        
        $dressings = new SausCold();
        $dressings->setName('dressings');
        $dressings->setAvailable(true);
        
        $wassabi = new SausCold();
        $wassabi->setName('wassabi');
        $wassabi->setAvailable(true);

        $manager->persist($mayonaise);
        $manager->persist($ketchup);
        $manager->persist($curry_ketchup);
        $manager->persist($curry);
        $manager->persist($mammoet);
        $manager->persist($frietsaus);
        $manager->persist($tartaar);
        $manager->persist($cocktail);
        $manager->persist($tomataise);
        $manager->persist($andalouse);
        $manager->persist($look);
        $manager->persist($samurai);
        $manager->persist($hannibal);
        $manager->persist($joppie);
        $manager->persist($bickysaus);
        $manager->persist($bbqsaus);
        $manager->persist($specialsaus);
        $manager->persist($amerikaanse);
        $manager->persist($pickels);
        $manager->persist($mosterd);
        $manager->persist($pepersaus);
        $manager->persist($dressings);
        $manager->persist($wassabi);
        $manager->flush();

    }
}

?>