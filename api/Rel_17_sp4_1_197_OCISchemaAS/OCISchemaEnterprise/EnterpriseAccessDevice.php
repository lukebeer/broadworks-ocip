<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies an access device accessible for an enterprise. It could be a system level device, an enterprise level device or a group level device.
 */
class EnterpriseAccessDevice extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseAccessDevice';
    protected $accessDevice;
    protected $groupId;

    public function __construct(
         $accessDevice = '',
         $groupId = null
    ) {
        $this->setAccessDevice($accessDevice);
        $this->setGroupId($groupId);
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
    public function setAccessDevice($accessDevice = null)
    {
        $this->accessDevice = new SimpleContent($accessDevice);
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDevice
     */
    public function getAccessDevice()
    {
        return ($this->accessDevice) ? $this->accessDevice->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = new SimpleContent($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }
}
