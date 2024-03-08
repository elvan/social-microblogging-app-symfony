<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $microPost1 = new MicroPost();
        $microPost1->setTitle("Measuring Programming Progress By Lines Of Code Is Like Measuring Aircraft Building Progress By Weight.");
        $microPost1->setText("C makes it easy to shoot yourself in the foot; C++ makes it harder, but when you do, it blows away your whole leg. One of my most productive days was throwing away 1000 lines of code.");
        $microPost1->setCreated(new DateTime());
        $manager->persist($microPost1);

        $microPost2 = new MicroPost();
        $microPost2->setTitle("Program Testing Can Be Used To Show The Presence Of Bugs, But Never To Show Their Absence!");
        $microPost2->setText("Program testing can be used to show the presence of bugs, but never to show their absence! I don't care if it works on your machine! We are not shipping your machine!");
        $microPost2->setCreated(new DateTime());
        $manager->persist($microPost2);

        $microPost3 = new MicroPost();
        $microPost3->setTitle("In Theory, Theory And Practice Are The Same. In Practice, They're Not.");
        $microPost3->setText("If debugging is the process of removing software bugs, then programming must be the process of putting them in. I don't care if it works on your machine! We are not shipping your machine!");
        $microPost3->setCreated(new DateTime());
        $manager->persist($microPost3);

        $manager->flush();
    }
}
