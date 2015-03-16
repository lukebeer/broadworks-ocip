<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Access device credentials.
 */
class DeviceManagementUserNamePassword extends ComplexType implements ComplexInterface
{
    public    $name = 'DeviceManagementUserNamePassword';
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
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userName
     */
    public function getUserName()
    {
        return ($this->userName) ? $this->userName->getValue() : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = new SimpleContent($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
     */
    public function getPassword()
    {
        return ($this->password) ? $this->password->getValue() : null;
    }
}
