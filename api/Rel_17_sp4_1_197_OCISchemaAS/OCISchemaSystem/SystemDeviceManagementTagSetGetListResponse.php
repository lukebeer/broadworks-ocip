<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceManagementTagSetGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *         The response includes an array of tag set names defined in the system.
 *         The system default tag set name is not part of this response.
 */
class SystemDeviceManagementTagSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $tagSetName = null;

    /**
     * @return SystemDeviceManagementTagSetGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A static tag set name for access device files managed by the Device Management System on BroadWorks.
     */
    public function setTagSetName($tagSetName = null)
    {
        $this->tagSetName = ($tagSetName InstanceOf DeviceManagementTagSetName)
             ? $tagSetName
             : new DeviceManagementTagSetName($tagSetName);
    }

    /**
     * A static tag set name for access device files managed by the Device Management System on BroadWorks.
     */
    public function getTagSetName()
    {
        return (!$this->tagSetName) ?: $this->tagSetName->getValue();
    }
}
