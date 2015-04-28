<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 */
class ServiceProviderDnGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDnGetAvailableListResponse';
    protected $availableDn;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDnGetAvailableListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableDn($availableDn = null)
    {
        $this->availableDn = new PrimitiveType($availableDn);
        $this->availableDn->setElementName('availableDn');
        return $this;
    }

    /**
     * 
     * @return string $availableDn
     */
    public function getAvailableDn()
    {
        return ($this->availableDn)
            ? $this->availableDn->getElementValue()
            : null;
    }
}
