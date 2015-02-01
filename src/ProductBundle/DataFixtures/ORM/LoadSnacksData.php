<?php 

namespace ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ProductBundle\Entity\Snacks;

class LoadSnacksData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $curryworst = new Snacks();
        $curryworst->setName('curryworst');
        $curryworst->setPrice(1.50);
        $curryworst->setSpecial(1);
        $curryworst->setSpecialPrice(2.00);
        $curryworst->setShow(1);

        
        $curryworst_xxl = new Snacks();
        $curryworst_xxl->setName('curryworst xxl');
        $curryworst_xxl->setPrice(2.75);
        $curryworst_xxl->setSpecial(1);
        $curryworst_xxl->setSpecialPrice(3.25);
        $curryworst_xxl->setShow(1);

        
        $viandel = new Snacks();
        $viandel->setName('viandel');
        $viandel->setPrice(1.75);
        $viandel->setSpecial(0);
        $viandel->setShow(1);

        
        $boulet = new Snacks();
        $boulet->setName('boulet');
        $boulet->setPrice(1.50);
        $boulet->setSpecial(1);
        $boulet->setSpecialPrice(2.00);
        $boulet->setShow(1);

        
        $roulette = new Snacks();
        $roulette->setName('roulette');
        $roulette->setPrice(1.75);
        $roulette->setSpecial(0);
        $roulette->setShow(1);

        
        $berepoot = new Snacks();
        $berepoot->setName('berepoot');
        $berepoot->setPrice(1.80);
        $berepoot->setSpecial(0);
        $berepoot->setShow(1);

        
        $berehap = new Snacks();
        $berehap->setName('berehap');
        $berehap->setPrice(2.50);
        $berehap->setSpecial(0);
        $berehap->setShow(1);

        
        $cervela = new Snacks();
        $cervela->setName('cervela');
        $cervela->setPrice(2.25);
        $cervela->setSpecial(1);
        $cervela->setSpecialPrice(2.75);
        $cervela->setShow(1);

        
        $playboy = new Snacks();
        $playboy->setName('playboy');
        $playboy->setPrice(2.50);
        $playboy->setSpecial(1);
        $playboy->setSpecialPrice(3.00);
        $playboy->setShow(1);

        
        $bitterballen = new Snacks();
        $bitterballen->setName('bitterballen');
        $bitterballen->setPrice(1.25);
        $bitterballen->setSpecial(0);
        $bitterballen->setShow(1);

        
        $chickenfingers = new Snacks();
        $chickenfingers->setName('chickenfingers');
        $chickenfingers->setPrice(2.25);
        $chickenfingers->setSpecial(0);
        $chickenfingers->setShow(1);

        
        $fishfingers = new Snacks();
        $fishfingers->setName('fishfingers');
        $fishfingers->setPrice(2.50);
        $fishfingers->setSpecial(0);
        $fishfingers->setShow(1);

        
        $chickennuggets = new Snacks();
        $chickennuggets->setName('chickennuggets');
        $chickennuggets->setPrice(2.50);
        $chickennuggets->setSpecial(0);
        $chickennuggets->setShow(1);

        
        $kaassouffle = new Snacks();
        $kaassouffle->setName('kaassouffl&eacute;');
        $kaassouffle->setPrice(1.75);
        $kaassouffle->setSpecial(0);
        $kaassouffle->setShow(1);

        
        $trio_van_kaas = new Snacks();
        $trio_van_kaas->setName('trio van kaas');
        $trio_van_kaas->setPrice(3.50);
        $trio_van_kaas->setSpecial(0);
        $trio_van_kaas->setShow(1);

        
        $kaaskroket = new Snacks();
        $kaaskroket->setName('kaaskroket');
        $kaaskroket->setPrice(1.90);
        $kaaskroket->setSpecial(0);
        $kaaskroket->setShow(1);

        
        $vleeskroket = new Snacks();
        $vleeskroket->setName('vleeskroket');
        $vleeskroket->setPrice(1.50);
        $vleeskroket->setSpecial(0);
        $vleeskroket->setShow(1);

        
        $garnaalkroket = new Snacks();
        $garnaalkroket->setName('garnaalkroket');
        $garnaalkroket->setPrice(2.30);
        $garnaalkroket->setSpecial(0);
        $garnaalkroket->setShow(1);

        
        $goulashkroket = new Snacks();
        $goulashkroket->setName('goulashkroket');
        $goulashkroket->setPrice(1.50);
        $goulashkroket->setSpecial(0);
        $goulashkroket->setShow(1);

        
        $beefburger = new Snacks();
        $beefburger->setName('beefburger');
        $beefburger->setPrice(1.50);
        $beefburger->setSpecial(0);
        $beefburger->setShow(1);

        
        $hamburger = new Snacks();
        $hamburger->setName('hamburger');
        $hamburger->setPrice(1.50);
        $hamburger->setSpecial(0);
        $hamburger->setShow(1);

        
        $kipkrokant = new Snacks();
        $kipkrokant->setName('kipkrokant');
        $kipkrokant->setPrice(2.50);
        $kipkrokant->setSpecial(0);
        $kipkrokant->setShow(1);

        
        $sate = new Snacks();
        $sate->setName('sat&eacute;');
        $sate->setPrice(3.00);
        $sate->setSpecial(0);
        $sate->setShow(1);

        
        $kipsate = new Snacks();
        $kipsate->setName('kipsat&eacute;');
        $kipsate->setPrice(3.00);
        $kipsate->setSpecial(0);
        $kipsate->setShow(1);

        
        $ardeense_sate = new Snacks();
        $ardeense_sate->setName('ardeense sat&eacute;');
        $ardeense_sate->setPrice(2.25);
        $ardeense_sate->setSpecial(0);
        $ardeense_sate->setShow(1);

        
        $kippeboutjes = new Snacks();
        $kippeboutjes->setName('kippeboutjes');
        $kippeboutjes->setPrice(3.00);
        $kippeboutjes->setSpecial(0);
        $kippeboutjes->setShow(1);

        
        $braadworst = new Snacks();
        $braadworst->setName('braadworst');
        $braadworst->setPrice(2.25);
        $braadworst->setSpecial(0);
        $braadworst->setShow(1);

        
        $bockworst = new Snacks();
        $bockworst->setName('bockworst');
        $bockworst->setPrice(2.00);
        $bockworst->setSpecial(0);
        $bockworst->setShow(1);

        
        $kipcorn = new Snacks();
        $kipcorn->setName('kipcorn');
        $kipcorn->setPrice(2.00);
        $kipcorn->setSpecial(0);
        $kipcorn->setShow(1);

        
        $kip_kaaspunt = new Snacks();
        $kip_kaaspunt->setName('kip/kaaspunt');
        $kip_kaaspunt->setPrice(2.50);
        $kip_kaaspunt->setSpecial(0);
        $kip_kaaspunt->setShow(1);

        
        $kraker = new Snacks();
        $kraker->setName('kraker');
        $kraker->setPrice(2.00);
        $kraker->setSpecial(0);
        $kraker->setShow(1);

        
        $mexicano = new Snacks();
        $mexicano->setName('mexicano');
        $mexicano->setPrice(2.00);
        $mexicano->setSpecial(0);
        $mexicano->setShow(1);

        
        $mexicano_xl = new Snacks();
        $mexicano_xl->setName('mexicano xl');
        $mexicano_xl->setPrice(2.25);
        $mexicano_xl->setSpecial(0);
        $mexicano_xl->setShow(1);

        
        $pikanto = new Snacks();
        $pikanto->setName('pikanto');
        $pikanto->setPrice(1.50);
        $pikanto->setSpecial(0);
        $pikanto->setShow(1);

        
        $sito = new Snacks();
        $sito->setName('sito');
        $sito->setPrice(2.50);
        $sito->setSpecial(0);
        $sito->setShow(1);

        
        $taco = new Snacks();
        $taco->setName('taco');
        $taco->setPrice(2.50);
        $taco->setSpecial(0);
        $taco->setShow(1);

        
        $ragouzi = new Snacks();
        $ragouzi->setName('ragouzi');
        $ragouzi->setPrice(2.00);
        $ragouzi->setSpecial(0);
        $ragouzi->setShow(1);

        
        $lucifer = new Snacks();
        $lucifer->setName('lucifer');
        $lucifer->setPrice(2.50);
        $lucifer->setSpecial(0);
        $lucifer->setShow(1);

        
        $ziguenerstick = new Snacks();
        $ziguenerstick->setName('ziguenerstick');
        $ziguenerstick->setPrice(2.00);
        $ziguenerstick->setSpecial(0);
        $ziguenerstick->setShow(1);

        
        $picknicker = new Snacks();
        $picknicker->setName('picknicker');
        $picknicker->setPrice(2.75);
        $picknicker->setSpecial(0);
        $picknicker->setShow(1);
        
        $mini_mix = new Snacks();
        $mini_mix->setName('mini mix');
        $mini_mix->setPrice(2.75);
        $mini_mix->setSpecial(0);
        $mini_mix->setShow(1);

        
        $wreker = new Snacks();
        $wreker->setName('wreker');
        $wreker->setPrice(3.00);
        $wreker->setSpecial(0);
        $wreker->setShow(1);

        
        $bami = new Snacks();
        $bami->setName('bami');
        $bami->setPrice(1.80);
        $bami->setSpecial(0);
        $bami->setShow(1);

        
        $loempia = new Snacks();
        $loempia->setName('loempia');
        $loempia->setPrice(3.00);
        $loempia->setSpecial(0);
        $loempia->setShow(1);

        
        $mini_loempia = new Snacks();
        $mini_loempia->setName("mini loempia's");
        $mini_loempia->setPrice(2.25);
        $mini_loempia->setSpecial(0);
        $mini_loempia->setShow(1);

        
        $fishcorn = new Snacks();
        $fishcorn->setName('fishcorn');
        $fishcorn->setPrice(3.00);
        $fishcorn->setSpecial(0);
        $fishcorn->setShow(1);
        
        $manager->persist($curryworst);
        $manager->persist($curryworst_xxl);
        $manager->persist($viandel);
        $manager->persist($boulet);
        $manager->persist($roulette);
        $manager->persist($berepoot);
        $manager->persist($berehap);
        $manager->persist($cervela);
        $manager->persist($playboy);
        $manager->persist($bitterballen);
        $manager->persist($chickenfingers);
        $manager->persist($fishfingers);
        $manager->persist($chickennuggets);
        $manager->persist($kaassouffle);
        $manager->persist($trio_van_kaas);
        $manager->persist($kaaskroket);
        $manager->persist($vleeskroket);
        $manager->persist($garnaalkroket);
        $manager->persist($goulashkroket);
        $manager->persist($beefburger);
        $manager->persist($hamburger);
        $manager->persist($kipkrokant);
        $manager->persist($sate);
        $manager->persist($kipsate);
        $manager->persist($ardeense_sate);
        $manager->persist($kippeboutjes);
        $manager->persist($braadworst);
        $manager->persist($bockworst);
        $manager->persist($kipcorn);
        $manager->persist($kip_kaaspunt);
        $manager->persist($kraker);
        $manager->persist($mexicano);
        $manager->persist($mexicano_xl);
        $manager->persist($pikanto);
        $manager->persist($sito);
        $manager->persist($taco);
        $manager->persist($ragouzi);
        $manager->persist($lucifer);
        $manager->persist($ziguenerstick);
        $manager->persist($picknicker);
        $manager->persist($mini_mix);
        $manager->persist($wreker);
        $manager->persist($bami);
        $manager->persist($loempia);
        $manager->persist($mini_loempia);
        $manager->persist($fishcorn);
        $manager->flush();

    }
}

?>