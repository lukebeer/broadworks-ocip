<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get all the attributes of a configurable treatment.
 *         The response is either a SystemConfigurableTreatmentGetResponse16 or an ErrorResponse.
 */
class SystemConfigurableTreatmentGetRequest16 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableTreatmentGetResponse16';
    public    $elementName = 'SystemConfigurableTreatmentGetRequest16';
    protected $treatmentId;

    public function __construct(
         $treatmentId = ''
    ) {
        $this->setTreatmentId($treatmentId);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableTreatmentGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
