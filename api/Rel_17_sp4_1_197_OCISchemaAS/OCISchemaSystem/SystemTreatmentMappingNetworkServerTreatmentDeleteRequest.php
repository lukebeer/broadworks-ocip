<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerTreatment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingNetworkServerTreatmentDeleteResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a NS Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $nsTreatment = null;

    public function __construct(
         $nsTreatment
    ) {
        $this->setNsTreatment($nsTreatment);
    }

    /**
     * @return SystemTreatmentMappingNetworkServerTreatmentDeleteResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Possible string value for Network Server Treatment.
     */
    public function setNsTreatment($nsTreatment = null)
    {
        $this->nsTreatment = ($nsTreatment InstanceOf NetworkServerTreatment)
             ? $nsTreatment
             : new NetworkServerTreatment($nsTreatment);
    }

    /**
     * Possible string value for Network Server Treatment.
     */
    public function getNsTreatment()
    {
        return (!$this->nsTreatment) ?: $this->nsTreatment->getValue();
    }
}
