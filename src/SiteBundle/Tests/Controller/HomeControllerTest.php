<?php

namespace SiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testMenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/menus');
    }

    public function testFrite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/frites');
    }

    public function testDrink()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/drinks');
    }

    public function testSaus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/saus');
    }

    public function testSnack()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/snacks');
    }

}
