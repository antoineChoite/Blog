<?php

namespace Tonkai\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testSeriepageIsUp()
    {
        $client = static::createClient();
        $client->request('GET', '/serie');
        
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testHomepageIsUp()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testNewVideopageIsUp()
    {
        $client = static::createClient();
        $client->request('GET', '/video/new');
        
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testOpeningpageIsUp()
    {
        $client = static::createClient();
        $client->request('GET', '/opening');
        
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }


}