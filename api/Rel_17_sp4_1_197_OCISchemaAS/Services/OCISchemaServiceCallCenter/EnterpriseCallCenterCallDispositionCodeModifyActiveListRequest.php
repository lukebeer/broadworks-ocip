<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to set the active status of Call Center Call Disposition Codes.      
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceProviderId             = null;
    protected $callDispositionCodeActivation = null;

    public function __construct(
         $serviceProviderId,
          $callDispositionCodeActivation = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
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
