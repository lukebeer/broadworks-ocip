<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\InternalReleaseCause16;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingInternalReleaseCauseDeleteRequest';
    protected $internalReleaseCause;

    public function __construct(
         $internalReleaseCause = ''
    ) {
        $this->setInternalReleaseCause($internalReleaseCause);
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
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
        $this->internalReleaseCause->setElementName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause16 $internalReleaseCause
     */
    public function getInternalReleaseCause()
    {
        return ($this->internalReleaseCause)
            ? $this->internalReleaseCause->getElementValue()
            : null;
    }
}
