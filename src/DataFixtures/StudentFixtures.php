<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
;

class StudentFixtures extends Fixture implements DependentFixtureInterface
{

    public const STUDENTS = [
        ['name' => 'Merwan', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Lyon'],
        ['name' => 'Ryad', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Lyon',],
        ['name' => 'Paul', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Lyon',],
        ['name' => 'Victor', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Lyon',],
        ['name' => 'Julien', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Remote',],
        ['name' => 'Yannick', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Remote',],
        ['name' => 'Stéphanie V', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Remote',],
        ['name' => 'Stéphanie M', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Remote',],
        ['name' => 'Zinédine', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Paris',],
        ['name' => 'Wissal', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Paris',],
        ['name' => 'Johann', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Bordeaux',],
        ['name' => 'Mélissa', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Bordeaux',],
        ['name' => 'Côme', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Bordeaux',],
        ['name' => 'Virginie', 'picture' => 'https://fakeimg.pl/200x200/', 'campus' => 'Bordeaux',],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::STUDENTS as $studentData) {
            $student = new Student();
            $student->setName($studentData['name']);
            $student->setPicture($studentData['picture']);
            $student->setCampus($this->getReference($studentData['campus']));
            $manager->persist($student);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CampusFixtures::class
        ];
    }
}
