<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingQ850CauseDeleteRequest';
    protected $q850CauseValue;

    public function __construct(
         $q850CauseValue = ''
    ) {
        $this->setQ850CauseValue($q850CauseValue);
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
}
