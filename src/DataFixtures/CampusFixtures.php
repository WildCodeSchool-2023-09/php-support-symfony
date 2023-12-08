<?php

namespace App\DataFixtures;

use App\Entity\Campus;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class CampusFixtures extends Fixture
{
    private CONST CAMPUS = [
        'Bordeaux', 
        'Paris',
        'Lyon',
        'Remote'
    ];
    
    public function load(ObjectManager $manager): void
    {
        // $campus = new Campus();
        // $campus->setName('Bordeaux');
        // $manager->persist($campus);

        // $campus = new Campus();
        // $campus->setName('Paris');
        // $manager->persist($campus);
        foreach (self::CAMPUS as $school) {
            $campus = new Campus();
            $campus->setName($school);
            $this->addReference($school, $campus);
            $manager->persist($campus);
        }

        $manager->flush();
    }
}
