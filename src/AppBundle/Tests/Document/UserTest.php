<?php

namespace AppBundle\Tests\Document;

use AppBundle\Document\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    public function testConstruct()
    {
        $user = new User();
        $this->assertInstanceOf(
            'AppBundle\Document\User',
            $user
        );
        $this->assertInstanceOf(
            'FOS\UserBundle\Model\User',
            $user
        );
    }
}
