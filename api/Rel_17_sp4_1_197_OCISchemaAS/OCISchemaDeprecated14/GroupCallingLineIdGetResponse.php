<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallingLineIdGetRequest.
 *         The response contains the group's calling line id settings.
 */
class GroupCallingLineIdGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallingLineIdGetResponse';
    protected $useGroupNumber;
    protected $useGroupName;
    protected $callingLineIdPhoneNumber;
    protected $callingLineIdName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallingLineIdGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseGroupNumber($useGroupNumber = null)
    {
        $this->useGroupNumber = new PrimitiveType($useGroupNumber);
        $this->useGroupNumber->setName('useGroupNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupNumber
     */
    public function getUseGroupNumber()
    {
        return ($this->useGroupNumber) ? $this->useGroupNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        $this->useGroupName = new PrimitiveType($useGroupName);
        $this->useGroupName->setName('useGroupName');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupName
     */
    public function getUseGroupName()
    {
        return ($this->useGroupName) ? $this->useGroupName->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        $this->callingLineIdPhoneNumber = ($callingLineIdPhoneNumber InstanceOf DN)
             ? $callingLineIdPhoneNumber
             : new DN($callingLineIdPhoneNumber);
        $this->callingLineIdPhoneNumber->setName('callingLineIdPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $callingLineIdPhoneNumber
     */
    public function getCallingLineIdPhoneNumber()
    {
        return ($this->callingLineIdPhoneNumber) ? $this->callingLineIdPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdName($callingLineIdName = null)
    {
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
        $this->callingLineIdName->setName('callingLineIdName');
        return $this;
    }

    /**
     * 
     * @return GroupCallingLineIdName $callingLineIdName
     */
    public function getCallingLineIdName()
    {
        return ($this->callingLineIdName) ? $this->callingLineIdName->getValue() : null;
    }
}
