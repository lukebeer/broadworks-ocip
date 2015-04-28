<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Outgoing Calling Plan being forwarded/transferred permissions.
 */
class OutgoingCallingPlanRedirectedPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanRedirectedPermissionsModify';
    protected $outsideGroup;

    public function __construct(
         $outsideGroup = null
    ) {
        $this->setOutsideGroup($outsideGroup);
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
    public function setOutsideGroup($outsideGroup = null)
    {
        $this->outsideGroup = new SimpleContent($outsideGroup);
        $this->outsideGroup->setElementName('outsideGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $outsideGroup
     */
    public function getOutsideGroup()
    {
        return ($this->outsideGroup)
            ? $this->outsideGroup->getElementValue()
            : null;
    }
}
