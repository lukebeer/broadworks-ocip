<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterQueueCallDispositionCodeSettingsModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the enterprise level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $serviceUserId                  = null;
    protected $enableCallDispositionCodes     = null;
    protected $includeOrganizationCodes       = null;
    protected $forceUseOfCallDispositionCodes = null;
    protected $defaultCallDispositionCode     = null;
    protected $callDispositionCodeActivation  = null;

    public function __construct(
         $serviceUserId,
         $enableCallDispositionCodes = null,
         $includeOrganizationCodes = null,
         $forceUseOfCallDispositionCodes = null,
          $defaultCallDispositionCode = null,
          $callDispositionCodeActivation = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableCallDispositionCodes($enableCallDispositionCodes);
        $this->setIncludeOrganizationCodes($includeOrganizationCodes);
        $this->setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes);
        $this->setDefaultCallDispositionCode($defaultCallDispositionCode);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
    }

    /**
     * @return GroupCallCenterQueueCallDispositionCodeSettingsModifyResponse
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
     * 
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes = null)
    {
        $this->enableCallDispositionCodes = (boolean) $enableCallDispositionCodes;
    }

    /**
     * 
     */
    public function getEnableCallDispositionCodes()
    {
        return (!$this->enableCallDispositionCodes) ?: $this->enableCallDispositionCodes;
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        $this->includeOrganizationCodes = (boolean) $includeOrganizationCodes;
    }

    /**
     * 
     */
    public function getIncludeOrganizationCodes()
    {
        return (!$this->includeOrganizationCodes) ?: $this->includeOrganizationCodes;
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        $this->forceUseOfCallDispositionCodes = (boolean) $forceUseOfCallDispositionCodes;
    }

    /**
     * 
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return (!$this->forceUseOfCallDispositionCodes) ?: $this->forceUseOfCallDispositionCodes;
    }

    /**
     * Contains a Call Center Call Disposition Code and its Level
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        $this->defaultCallDispositionCode =  $defaultCallDispositionCode;
    }

    /**
     * Contains a Call Center Call Disposition Code and its Level
     */
    public function getDefaultCallDispositionCode()
    {
        return (!$this->defaultCallDispositionCode) ?: $this->defaultCallDispositionCode->getValue();
    }

    /**
     * Contains a Call Center Call Disposition Code and its active state
     */
    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
        $this->callDispositionCodeActivation =  $callDispositionCodeActivation;
    }

    /**
     * Contains a Call Center Call Disposition Code and its active state
     */
    public function getCallDispositionCodeActivation()
    {
        return (!$this->callDispositionCodeActivation) ?: $this->callDispositionCodeActivation->getValue();
    }
}
