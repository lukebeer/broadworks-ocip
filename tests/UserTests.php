<?php

namespace BroadworksOCIP\tests;

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser as OCISchemaUser;
use BroadworksOCIP\Client\Transport\TCPTransport;
use BroadworksOCIP\Client\Client;


class UserTest extends \PHPUnit_Framework_TestCase
{
    private $client;
    private $transport;
    private $host = '';
    private $user = '';
    private $pass = '';


    public function testTransport() {
        $this->transport = new TCPTransport($this->host);
        $this->assertType('\BroadworksOCIP\Client\Transport\TCPTransport', $this->transport);
    }

    public function testClient() {
        $this->client = new Client($this->transport);
        $this->assertType('\BroadworksOCIP\Client\Client', $this->client);
    }

    public function testLogin() {
        $result = $this->client->login($this->user, $this->pass);
        $this->assertTrue($result);
    }

    public function userGetRequestTest()
    {
        $request = new OCISchemaUser\UserGetRequest17sp4('user@example.com');
        $response = $request->get($this->client);
        $this->assertType('BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetResponse17sp4', $response);
    }
}
?>
