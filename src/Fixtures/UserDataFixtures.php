<?php


namespace Jowy\P2bj\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jowy\P2bj\Domain\Entity\User;

/**
 * Class UserDataFixtures
 * @package Jowy\P2bj\Fixtures
 */
class UserDataFixtures implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = User::create('skpd', 'skpd', 'skpd');

        $manager->persist($user);
        $manager->flush();
    }
}
