<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Access device credentials.
 */
class DeviceManagementUserNamePassword16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DeviceManagementUserNamePassword16';
    protected $userName;
    protected $password;

    public function __construct(
         $userName = '',
         $password = ''
    ) {
        $this->setUserName($userName);
        $this->setPassword($password);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = new SimpleContent($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userName
     */
    public function getUserName()
    {
        return ($this->userName)
            ? $this->userName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = new SimpleContent($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
     */
    public function getPassword()
    {
        return ($this->password)
            ? $this->password->getElementValue()
            : null;
    }
}
