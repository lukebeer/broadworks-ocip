<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Adds DNs to a service provider. It is possible to add either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDnAddListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDnAddListRequest';
    protected $serviceProviderId;
    protected $phoneNumber;
    protected $dnRange;

    public function __construct(
         $serviceProviderId = '',
         $phoneNumber = null,
         $dnRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setPhoneNumber($phoneNumber);
        $this->setDnRange($dnRange);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDnRange(DNRange $dnRange = null)
    {
        $this->dnRange = ($dnRange InstanceOf DNRange)
             ? $dnRange
             : new DNRange($dnRange);
        $this->dnRange->setElementName('dnRange');
        return $this;
    }

    /**
     * 
     * @return DNRange $dnRange
     */
    public function getDnRange()
    {
        return $this->dnRange;
    }
}
