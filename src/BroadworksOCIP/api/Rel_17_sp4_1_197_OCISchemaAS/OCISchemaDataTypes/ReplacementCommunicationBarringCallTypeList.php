<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of Communication Barring Call Types that replaces a previously
 *         configured list. By convention, an element of this type may be set 
 *         nill to clear the list.
 */
class ReplacementCommunicationBarringCallTypeList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementCommunicationBarringCallTypeList';
    protected $callType;

    public function __construct(
         $callType = null
    ) {
        $this->setCallType($callType);
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
    public function setCallType($callType = null)
    {
        $this->callType = new SimpleContent($callType);
        $this->callType->setElementName('callType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callType
     */
    public function getCallType()
    {
        return ($this->callType)
            ? $this->callType->getElementValue()
            : null;
    }
}
