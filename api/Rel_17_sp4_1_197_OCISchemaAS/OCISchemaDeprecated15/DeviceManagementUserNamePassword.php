<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\DeviceManagementUserNamePassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Access device credentials.
 */
class DeviceManagementUserNamePassword extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\DeviceManagementUserNamePassword';
    public    $name     = 'DeviceManagementUserNamePassword';
    protected $userName = null;
    protected $password = null;

    public function __construct(
         $userName,
         $password
    ) {
        $this->setUserName($userName);
        $this->setPassword($password);
    }

    /**
     * @return DeviceManagementUserNamePassword
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
        if (!$userName) return $this;
        $this->userName = new SimpleContent($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserName()
    {
        return $this->userName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = new SimpleContent($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }
}
