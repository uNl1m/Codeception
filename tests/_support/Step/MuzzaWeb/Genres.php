<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\GenresAndSubgenres;
use Page\MuzzaWeb\MainPage;

class Genres extends \WebGuy
{

    public function alternativeGenre()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(GenresAndSubgenres::$alternativeGenre);
        $I->seeInPageSource(GenresAndSubgenres::$alternativeGenreCrumbs);
        $I->seeCurrentUrlEquals('/station/alternative');
        $I->seeElement(GenresAndSubgenres::$adultAlternative);
        $I->click(GenresAndSubgenres::$adultAlternative);
        $I->seeInPageSource(GenresAndSubgenres::$adultAlternativeCrumbs);
        $I->seeCurrentUrlEquals('/station/alternative/adult-alternative');
        $I->seeElement(GenresAndSubgenres::$britpop);
        $I->click(GenresAndSubgenres::$britpop);
        $I->seeInPageSource(GenresAndSubgenres::$britpopCrumbs);
        $I->seeElement(GenresAndSubgenres::$classicAlternative);
        $I->click(GenresAndSubgenres::$classicAlternative);
        $I->seeInPageSource(GenresAndSubgenres::$classicAlternativeCrumbs);
        $I->seeElement(GenresAndSubgenres::$college);
        $I->click(GenresAndSubgenres::$college);
        $I->seeInPageSource(GenresAndSubgenres::$collegeCrumbs);
        $I->seeElement(GenresAndSubgenres::$dancepunk);
        $I->click(GenresAndSubgenres::$dancepunk);
        $I->seeInPageSource(GenresAndSubgenres::$dancepunkCrumbs);
        $I->seeElement(GenresAndSubgenres::$dreamPop);
        $I->click(GenresAndSubgenres::$dreamPop);
        $I->seeInPageSource(GenresAndSubgenres::$dreamPopCrumbs);
        $I->seeElement(GenresAndSubgenres::$emo);
        $I->click(GenresAndSubgenres::$emo);
        $I->seeInPageSource(GenresAndSubgenres::$emoCrumbs);
        $I->seeElement(GenresAndSubgenres::$goth);
        $I->click(GenresAndSubgenres::$goth);
        $I->seeInPageSource(GenresAndSubgenres::$gothCrumbs);
        $I->seeElement(GenresAndSubgenres::$grunge);
        $I->click(GenresAndSubgenres::$grunge);
        $I->seeInPageSource(GenresAndSubgenres::$grungeCrumbs);
        $I->moveMouseOver(['xpath' => '//*[@id="mCSB_1_container"]/ul/li[18]/a']);
        $I->seeElement(GenresAndSubgenres::$hardcore);
        $I->click(GenresAndSubgenres::$hardcore);
        $I->seeInPageSource(GenresAndSubgenres::$hardcoreCrumbs);
        $I->seeElement(GenresAndSubgenres::$indiePop);
        $I->click(GenresAndSubgenres::$indiePop);
        $I->seeInPageSource(GenresAndSubgenres::$indiePopCrumbs);
        $I->seeElement(GenresAndSubgenres::$indieRock);
        $I->click(GenresAndSubgenres::$indieRock);
        $I->seeInPageSource(GenresAndSubgenres::$indieRockCrumbs);
        $I->seeElement(GenresAndSubgenres::$industrial);
        $I->click(GenresAndSubgenres::$industrial);
        $I->seeInPageSource(GenresAndSubgenres::$industrialCrumbs);
        $I->seeElement(GenresAndSubgenres::$lofi);
        $I->click(GenresAndSubgenres::$lofi);
        $I->seeInPageSource(GenresAndSubgenres::$lofiCrumbs);
        $I->seeElement(GenresAndSubgenres::$modernRock);
        $I->click(GenresAndSubgenres::$modernRock);
        $I->seeInPageSource(GenresAndSubgenres::$modernRockCrumbs);
        $I->seeElement(GenresAndSubgenres::$newWave);
        $I->click(GenresAndSubgenres::$newWave);
        $I->seeInPageSource(GenresAndSubgenres::$newWaveCrumbs);
        $I->seeElement(GenresAndSubgenres::$noisePop);
        $I->click(GenresAndSubgenres::$noisePop);
        $I->seeInPageSource(GenresAndSubgenres::$noisePopCrumbs);
        $I->seeElement(GenresAndSubgenres::$postPunk);
        $I->click(GenresAndSubgenres::$postPunk);
        $I->seeInPageSource(GenresAndSubgenres::$postPunkCrumbs);
        $I->moveMouseOver(['xpath' => '//*[@id="mCSB_1_container"]/ul/li[21]/a']);
        $I->seeElement(GenresAndSubgenres::$powerPop);
        $I->click(GenresAndSubgenres::$powerPop);
        $I->seeInPageSource(GenresAndSubgenres::$powerPopCrumbs);
        $I->seeElement(GenresAndSubgenres::$punk);
        $I->click(GenresAndSubgenres::$punk);
        $I->seeInPageSource(GenresAndSubgenres::$punkCrumbs);
        $I->seeElement(GenresAndSubgenres::$skaRock);
        $I->click(GenresAndSubgenres::$skaRock);
        $I->seeInPageSource(GenresAndSubgenres::$skaCrumbs);
        $I->moveMouseOver(['xpath' => '//*[@id="mCSB_1_container"]/ul/li[22]/a']);
        $I->seeElement(GenresAndSubgenres::$xtremeRock);
        $I->click(GenresAndSubgenres::$xtremeRock);
        $I->seeInPageSource(GenresAndSubgenres::$xtremeRockCrumbs);
    }
    public function bluesGenre()
    {

        $I = $this;
        $I->amOnPage('/');
        $I->click(GenresAndSubgenres::$bluesGenre);
        $I->seeInPageSource(GenresAndSubgenres::$bluesGenreCrumbs);
        $I->seeElement(GenresAndSubgenres::$acousticBlues);
        $I->click(GenresAndSubgenres::$acousticBlues);
        $I->seeInPageSource(GenresAndSubgenres::$acousticBluesCrumbs);
        $I->seeElement(GenresAndSubgenres::$cajunAndZydeco);
        $I->click(GenresAndSubgenres::$cajunAndZydeco);
        $I->seeInPageSource(GenresAndSubgenres::$cajunAndZydecoCrumbs);
        $I->seeElement(GenresAndSubgenres::$chicagoBlues);
        $I->click(GenresAndSubgenres::$chicagoBlues);
        $I->seeInPageSource(GenresAndSubgenres::$chicagoBluesCrumbs);
        $I->seeElement(GenresAndSubgenres::$contemporaryBlues);
        $I->click(GenresAndSubgenres::$contemporaryBlues);
        $I->seeInPageSource(GenresAndSubgenres::$contemporaryBluesCrumbs);
        $I->seeElement(GenresAndSubgenres::$countryBlues);
        $I->click(GenresAndSubgenres::$countryBlues);
        $I->seeInPageSource(GenresAndSubgenres::$countryBluesCrumbs);
        $I->seeElement(GenresAndSubgenres::$deltaBlues);
        $I->click(GenresAndSubgenres::$deltaBlues);
        $I->seeInPageSource(GenresAndSubgenres::$deltaBluesCrumbs);
        $I->seeElement(GenresAndSubgenres::$electricBlues);
        $I->click(GenresAndSubgenres::$electricBlues);
        $I->seeInPageSource(GenresAndSubgenres::$electricBluesCrumbs);
    }

    public function classicGenre()
    {

        $I = $this;
        $I->amOnPage('/');
        $I->executeJS('window.scrollTo(0,200);');
        $I->click(GenresAndSubgenres::$classicalGenre);
        $I->seeInPageSource(GenresAndSubgenres::$classicalGenreCrumbs);
        $I->seeElement(GenresAndSubgenres::$baroque);
        $I->click(GenresAndSubgenres::$baroque);
        $I->seeInPageSource(GenresAndSubgenres::$baroqueCrumbs);
        $I->seeElement(GenresAndSubgenres::$chamber);
        $I->click(GenresAndSubgenres::$chamber);
        $I->seeInPageSource(GenresAndSubgenres::$chamberCrumbs);
        $I->seeElement(GenresAndSubgenres::$choral);
        $I->click(GenresAndSubgenres::$choral);
        $I->seeInPageSource(GenresAndSubgenres::$choralCrumbs);
        $I->seeElement(GenresAndSubgenres::$classicalPeriod);
        $I->click(GenresAndSubgenres::$classicalPeriod);
        $I->seeInPageSource(GenresAndSubgenres::$classicalPeriodCrumbs);
        $I->seeElement(GenresAndSubgenres::$earlyClassical);
        $I->click(GenresAndSubgenres::$earlyClassical);
        $I->seeInPageSource(GenresAndSubgenres::$earlyClassicalCrumbs);
        $I->seeElement(GenresAndSubgenres::$impressionist);
        $I->click(GenresAndSubgenres::$impressionist);
        $I->seeInPageSource(GenresAndSubgenres::$impressionistCrumbs);
        $I->seeElement(GenresAndSubgenres::$modern);
        $I->click(GenresAndSubgenres::$modern);
        $I->seeInPageSource(GenresAndSubgenres::$modernCrumbs);
        $I->seeElement(GenresAndSubgenres::$opera);
        $I->click(GenresAndSubgenres::$opera);
        $I->seeInPageSource(GenresAndSubgenres::$operaCrumbs);
        $I->moveMouseOver(['xpath' => '//*[@id="mCSB_3_container"]/ul/li[11]/a']);
        $I->seeElement(GenresAndSubgenres::$piano);
        $I->click(GenresAndSubgenres::$piano);
        $I->seeInPageSource(GenresAndSubgenres::$pianoCrumbs);
        $I->seeElement(GenresAndSubgenres::$romantic);
        $I->click(GenresAndSubgenres::$romantic);
        $I->seeInPageSource(GenresAndSubgenres::$romanticCrumbs);
        $I->seeElement(GenresAndSubgenres::$symphony);
        $I->click(GenresAndSubgenres::$symphony);
        $I->seeInPageSource(GenresAndSubgenres::$symphonyCrumbs);
    }
    public function countryGenre()
    {

        $I = $this;
        $I->amOnPage('/');
        $I->executeJS('window.scrollTo(0,200);');
        $I->click(GenresAndSubgenres::$countryGenre);
        $I->seeInPageSource(GenresAndSubgenres::$countryGenreCrumbs);
        $I->seeElement(GenresAndSubgenres::$altCountry);
        $I->click(GenresAndSubgenres::$altCountry);
        $I->seeInPageSource(GenresAndSubgenres::$altCountryCrumbs);
        $I->seeElement(GenresAndSubgenres::$americana);
        $I->click(GenresAndSubgenres::$americana);
        $I->seeInPageSource(GenresAndSubgenres::$americanaCrumbs);
        $I->seeElement(GenresAndSubgenres::$bluegrass);
        $I->click(GenresAndSubgenres::$bluegrass);
        $I->seeInPageSource(GenresAndSubgenres::$bluegrassCrumbs);
        $I->seeElement(GenresAndSubgenres::$classicCountry);
        $I->click(GenresAndSubgenres::$classicCountry);
        $I->seeInPageSource(GenresAndSubgenres::$classicCountryCrumbs);
        $I->seeElement(GenresAndSubgenres::$contemporaryCountry);
        $I->click(GenresAndSubgenres::$contemporaryCountry);
        $I->seeInPageSource(GenresAndSubgenres::$contemporaryCountryCrumbs);
        $I->seeElement(GenresAndSubgenres::$honkyTonk);
        $I->click(GenresAndSubgenres::$honkyTonk);
        $I->seeInPageSource(GenresAndSubgenres::$honkyTonkCrumbs);
        $I->seeElement(GenresAndSubgenres::$hotCountryHits);
        $I->click(GenresAndSubgenres::$hotCountryHits);
        $I->seeInPageSource(GenresAndSubgenres::$hotCountryHitsCrumbs);
        $I->seeElement(GenresAndSubgenres::$western);
        $I->click(GenresAndSubgenres::$western);
        $I->seeInPageSource(GenresAndSubgenres::$westernCrumbs);
    }

}