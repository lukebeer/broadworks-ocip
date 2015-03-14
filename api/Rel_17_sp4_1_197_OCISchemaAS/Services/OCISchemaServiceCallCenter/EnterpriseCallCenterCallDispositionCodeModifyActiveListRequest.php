<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to set the active status of Call Center Call Disposition Codes.      
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = 'EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest';
    protected $serviceProviderId             = null;
    protected $callDispositionCodeActivation = null;

    public function __construct(
         $serviceProviderId,
         CallDispositionCodeActivation $callDispositionCodeActivation = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
        if (!$callDispositionCodeActivation) return $this;
        $this->callDispositionCodeActivation = $callDispositionCodeActivation;
        $this->callDispositionCodeActivation->setName('callDispositionCodeActivation');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeActivation $callDispositionCodeActivation
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation;
    }
}
