<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CallBlockingService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingCallBlockingServiceDeleteResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingCallBlockingServiceDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $callBlockingService = null;

    public function __construct(
         $callBlockingService
    ) {
        $this->setCallBlockingService($callBlockingService);
    }

    /**
     * @return SystemTreatmentMappingCallBlockingServiceDeleteResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Possible types of Call Blocking Services.
     *         The following enumeration values are only used in AS Data mode:
     *            PTT
     *            SAC
     *            BroadWorks Mobility Deny Originations
     *            BroadWorks Mobility Deny Terminations
     *          The following types are only used in HSS data mode:
     * 	    Incoming Communication Barring
     * 	    Hierarchical Communication Barring
     * 	    Incoming Hierarchical Communication Barring
     */
    public function setCallBlockingService($callBlockingService = null)
    {
        $this->callBlockingService = ($callBlockingService InstanceOf CallBlockingService)
             ? $callBlockingService
             : new CallBlockingService($callBlockingService);
    }

    /**
     * Possible types of Call Blocking Services.
     *         The following enumeration values are only used in AS Data mode:
     *            PTT
     *            SAC
     *            BroadWorks Mobility Deny Originations
     *            BroadWorks Mobility Deny Terminations
     *          The following types are only used in HSS data mode:
     * 	    Incoming Communication Barring
     * 	    Hierarchical Communication Barring
     * 	    Incoming Hierarchical Communication Barring
     */
    public function getCallBlockingService()
    {
        return (!$this->callBlockingService) ?: $this->callBlockingService->getValue();
    }
}
