<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a UserPreferredCarrierUserGetRequest.
 */
class UserPreferredCarrierUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPreferredCarrierUserGetResponse';
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierUserGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIntraLataCarrier(UserPreferredCarrierName $intraLataCarrier = null)
    {
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf UserPreferredCarrierName)
             ? $intraLataCarrier
             : new UserPreferredCarrierName($intraLataCarrier);
        $this->intraLataCarrier->setElementName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierName $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * 
     */
    public function setInterLataCarrier(UserPreferredCarrierName $interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf UserPreferredCarrierName)
             ? $interLataCarrier
             : new UserPreferredCarrierName($interLataCarrier);
        $this->interLataCarrier->setElementName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierName $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * 
     */
    public function setInternationalCarrier(UserPreferredCarrierName $internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf UserPreferredCarrierName)
             ? $internationalCarrier
             : new UserPreferredCarrierName($internationalCarrier);
        $this->internationalCarrier->setElementName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierName $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }
}
