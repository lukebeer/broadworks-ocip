<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Removes a BroadWorks Mobility IMRN number from the system. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityDeleteIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityDeleteIMRNListRequest';
    protected $imrnNumber;

    public function __construct(
         $imrnNumber = null
    ) {
        $this->setImrnNumber($imrnNumber);
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
    public function setImrnNumber($imrnNumber = null)
    {
        $this->imrnNumber = ($imrnNumber InstanceOf DN)
             ? $imrnNumber
             : new DN($imrnNumber);
        $this->imrnNumber->setElementName('imrnNumber');
        return $this;
    }

    /**
     * 
     * @return DN $imrnNumber
     */
    public function getImrnNumber()
    {
        return ($this->imrnNumber)
            ? $this->imrnNumber->getElementValue()
            : null;
    }
}
