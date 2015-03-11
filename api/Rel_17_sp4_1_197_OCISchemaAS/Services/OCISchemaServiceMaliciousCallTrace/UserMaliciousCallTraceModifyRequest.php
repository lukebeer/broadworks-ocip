<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceCallTypeSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserMaliciousCallTraceModifyRequest';
    protected $userId             = null;
    protected $isActive           = null;
    protected $traceTypeSelection = null;
    protected $traceForTimePeriod = null;
    protected $traceTimePeriod    = null;

    public function __construct(
         $userId,
         $isActive = null,
         $traceTypeSelection = null,
         $traceForTimePeriod = null,
         MaliciousCallTraceTimePeriod $traceTimePeriod = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setTraceTypeSelection($traceTypeSelection);
        $this->setTraceForTimePeriod($traceForTimePeriod);
        $this->setTraceTimePeriod($traceTimePeriod);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setTraceTypeSelection($traceTypeSelection = null)
    {
        if (!$traceTypeSelection) return $this;
        $this->traceTypeSelection = ($traceTypeSelection InstanceOf MaliciousCallTraceCallTypeSelection)
             ? $traceTypeSelection
             : new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
        $this->traceTypeSelection->setName('traceTypeSelection');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceCallTypeSelection
     */
    public function getTraceTypeSelection()
    {
        return $this->traceTypeSelection->getValue();
    }

    /**
     * 
     */
    public function setTraceForTimePeriod($traceForTimePeriod = null)
    {
        if (!$traceForTimePeriod) return $this;
        $this->traceForTimePeriod = new PrimitiveType($traceForTimePeriod);
        $this->traceForTimePeriod->setName('traceForTimePeriod');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getTraceForTimePeriod()
    {
        return $this->traceForTimePeriod->getValue();
    }

    /**
     * 
     */
    public function setTraceTimePeriod(MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
        if (!$traceTimePeriod) return $this;
        $this->traceTimePeriod = $traceTimePeriod;
        $this->traceTimePeriod->setName('traceTimePeriod');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceTimePeriod
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod;
    }
}
