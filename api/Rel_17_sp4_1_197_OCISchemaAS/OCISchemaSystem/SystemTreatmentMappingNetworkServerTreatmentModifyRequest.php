<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerTreatment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingNetworkServerTreatmentModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the fields for a Network Server Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $nsTreatment = null;
    protected $treatmentId = null;

    public function __construct(
         $nsTreatment,
         $treatmentId = null
    ) {
        $this->setNsTreatment($nsTreatment);
        $this->setTreatmentId($treatmentId);
    }

    /**
     * @return SystemTreatmentMappingNetworkServerTreatmentModifyResponse
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

    /**
     * Configurable Treatment Name
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->getValue();
    }
}
