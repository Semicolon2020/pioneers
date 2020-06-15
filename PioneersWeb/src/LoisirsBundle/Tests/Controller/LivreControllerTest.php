<?php

namespace LoisirsBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LivreControllerTest extends WebTestCase
{

    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/allL');
    }
}
