<?php
/**
 * Created by PhpStorm.
 * User: Podisto
 * Date: 31/05/2016
 * Time: 23:34
 */

namespace App\AppBundle\DataFixtures\ORM;


use App\AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUsersData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $user1 = new User();
        $user1->setName("Podisto");
        $user1->setEmail("podisto@gmail.com");
        $user1->setPassword(sha1('pass'));
        $user1->setTelephone('772996838');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName("toto");
        $user2->setEmail("toto@gmail.com");
        $user2->setPassword(sha1('pass'));
        $user2->setTelephone('772993838');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName("graf");
        $user3->setEmail("graf@gmail.com");
        $user3->setPassword(sha1('pass'));
        $user3->setTelephone('772996831');
        $manager->persist($user3);

        $manager->flush();
    }

}