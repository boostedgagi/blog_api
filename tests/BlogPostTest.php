<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogPostTest extends WebTestCase
{
    /**
     * @return void
     */
    public function testSomething(): void
    {
        $this->markTestSkipped();
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
//        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
