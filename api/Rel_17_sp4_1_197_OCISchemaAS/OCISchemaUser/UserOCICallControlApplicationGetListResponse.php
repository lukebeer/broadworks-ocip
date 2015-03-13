<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserOCICallControlApplicationGetListRequest.
 */
class UserOCICallControlApplicationGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserOCICallControlApplicationGetListResponse';
    protected $applicationId = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserOCICallControlApplicationGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        if (!$applicationId) return $this;
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId->getValue();
    }
}
