<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerTreatment;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Network Server Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemTreatmentMappingNetworkServerTreatmentAddRequest';
    protected $nsTreatment = null;
    protected $treatmentId = null;

    public function __construct(
         $nsTreatment,
         $treatmentId
    ) {
        $this->setNsTreatment($nsTreatment);
        $this->setTreatmentId($treatmentId);
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
    public function setNsTreatment($nsTreatment = null)
    {
        if (!$nsTreatment) return $this;
        $this->nsTreatment = ($nsTreatment InstanceOf NetworkServerTreatment)
             ? $nsTreatment
             : new NetworkServerTreatment($nsTreatment);
        $this->nsTreatment->setName('nsTreatment');
        return $this;
    }

    /**
     * 
     * @return NetworkServerTreatment $nsTreatment
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment->getValue();
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        if (!$treatmentId) return $this;
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $treatmentId
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }
}
