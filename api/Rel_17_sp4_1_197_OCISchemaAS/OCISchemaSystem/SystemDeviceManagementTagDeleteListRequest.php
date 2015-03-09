<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceManagementTagDeleteListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete static configuration tags.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $tagName = null;

    public function __construct(
         $tagName = null
    ) {
        $this->setTagName($tagName);
    }

    /**
     * @return SystemDeviceManagementTagDeleteListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
    }

    /**
     * A static tag name for access device files managed by the Device Management System on BroadWorks.
     *         The static tag name must start and end with a % with no other % in between. The tag must not
     *         start with %BW.
     */
    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->getValue();
    }
}
