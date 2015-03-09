<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointQueueCallDispositionCodeAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Route Point Call Disposition Code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointQueueCallDispositionCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $serviceUserId = null;
    protected $code          = null;
    protected $isActive      = null;
    protected $description   = null;

    public function __construct(
         $serviceUserId,
         $code,
         $isActive,
         $description = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setCode($code);
        $this->setIsActive($isActive);
        $this->setDescription($description);
    }

    /**
     * @return GroupRoutePointQueueCallDispositionCodeAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Call Center Call Disposition Code Value.
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf CallDispositionCode)
             ? $code
             : new CallDispositionCode($code);
    }

    /**
     * Call Center Call Disposition Code Value.
     */
    public function getCode()
    {
        return (!$this->code) ?: $this->code->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Call Center Call Disposition Code Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallDispositionCodeDescription)
             ? $description
             : new CallDispositionCodeDescription($description);
    }

    /**
     * Call Center Call Disposition Code Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
