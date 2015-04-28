<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Adds BroadWorks Mobility IMRN numbers to the system. It is possible to add either: 
 *         a single number, a list of numbers, or a range of numbers, or any combination thereof.
 *         The response is either a SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityAddIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityAddIMRNListRequest';
    protected $imrnNumber;
    protected $numberRange;

    public function __construct(
         $imrnNumber = null,
         $numberRange = null
    ) {
        $this->setImrnNumber($imrnNumber);
        $this->setNumberRange($numberRange);
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

    /**
     * 
     */
    public function setNumberRange(DNRange $numberRange = null)
    {
        $this->numberRange = ($numberRange InstanceOf DNRange)
             ? $numberRange
             : new DNRange($numberRange);
        $this->numberRange->setElementName('numberRange');
        return $this;
    }

    /**
     * 
     * @return DNRange $numberRange
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }
}
