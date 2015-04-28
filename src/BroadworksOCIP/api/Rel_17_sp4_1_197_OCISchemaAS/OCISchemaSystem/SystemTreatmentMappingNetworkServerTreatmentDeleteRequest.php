<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerTreatment;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a NS Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingNetworkServerTreatmentDeleteRequest';
    protected $nsTreatment;

    public function __construct(
         $nsTreatment = ''
    ) {
        $this->setNsTreatment($nsTreatment);
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
        $this->nsTreatment = ($nsTreatment InstanceOf NetworkServerTreatment)
             ? $nsTreatment
             : new NetworkServerTreatment($nsTreatment);
        $this->nsTreatment->setElementName('nsTreatment');
        return $this;
    }

    /**
     * 
     * @return NetworkServerTreatment $nsTreatment
     */
    public function getNsTreatment()
    {
        return ($this->nsTreatment)
            ? $this->nsTreatment->getElementValue()
            : null;
    }
}
