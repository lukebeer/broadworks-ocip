<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Call Center Call Disposition Code.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseCallCenterCallDispositionCodeDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'EnterpriseCallCenterCallDispositionCodeDeleteRequest';
    protected $serviceProviderId = null;
    protected $code              = null;

    public function __construct(
         $serviceProviderId,
         $code
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCode($code);
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
    public function setCode($code = null)
    {
        if (!$code) return $this;
        $this->code = ($code InstanceOf CallDispositionCode)
             ? $code
             : new CallDispositionCode($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCode $code
     */
    public function getCode()
    {
        return $this->code->getValue();
    }
}
