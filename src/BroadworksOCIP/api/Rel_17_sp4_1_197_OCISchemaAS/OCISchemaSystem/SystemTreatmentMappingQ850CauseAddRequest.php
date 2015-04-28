<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingQ850CauseAddRequest';
    protected $q850CauseValue;
    protected $treatmentId;

    public function __construct(
         $q850CauseValue = '',
         $treatmentId = ''
    ) {
        $this->setQ850CauseValue($q850CauseValue);
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
    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
        $this->q850CauseValue->setElementName('q850CauseValue');
        return $this;
    }

    /**
     * 
     * @return Q850CauseValue $q850CauseValue
     */
    public function getQ850CauseValue()
    {
        return ($this->q850CauseValue)
            ? $this->q850CauseValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setElementName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $treatmentId
     */
    public function getTreatmentId()
    {
        return ($this->treatmentId)
            ? $this->treatmentId->getElementValue()
            : null;
    }
}
