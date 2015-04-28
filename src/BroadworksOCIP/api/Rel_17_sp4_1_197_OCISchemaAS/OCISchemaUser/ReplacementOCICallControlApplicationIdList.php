<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of applicationIds that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementOCICallControlApplicationIdList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementOCICallControlApplicationIdList';
    protected $applicationId;

    public function __construct(
         $applicationId = null
    ) {
        $this->setApplicationId($applicationId);
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
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = new SimpleContent($applicationId);
        $this->applicationId->setElementName('applicationId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId)
            ? $this->applicationId->getElementValue()
            : null;
    }
}
