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
 * Authorize (with quantity) or unauthorize a service pack.
 */
class ServicePackAuthorization extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServicePackAuthorization';
    protected $servicePackName;

    public function __construct(
         $servicePackName = ''
    ) {
        $this->setServicePackName($servicePackName);
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
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = new SimpleContent($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }
}
