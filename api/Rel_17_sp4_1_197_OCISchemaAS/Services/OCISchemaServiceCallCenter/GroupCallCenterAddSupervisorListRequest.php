<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add supervisor(s) to a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterAddSupervisorListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterAddSupervisorListRequest';
    protected $serviceUserId;
    protected $supervisorUserId;

    public function __construct(
         $serviceUserId = '',
         $supervisorUserId = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setSupervisorUserId($supervisorUserId);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setSupervisorUserId($supervisorUserId = null)
    {
        $this->supervisorUserId = ($supervisorUserId InstanceOf UserId)
             ? $supervisorUserId
             : new UserId($supervisorUserId);
        $this->supervisorUserId->setName('supervisorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $supervisorUserId
     */
    public function getSupervisorUserId()
    {
        return ($this->supervisorUserId) ? $this->supervisorUserId->getValue() : null;
    }
}
