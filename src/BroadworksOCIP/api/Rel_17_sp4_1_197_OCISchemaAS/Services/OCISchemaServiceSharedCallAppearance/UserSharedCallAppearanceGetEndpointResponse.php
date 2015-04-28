<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 */
class UserSharedCallAppearanceGetEndpointResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSharedCallAppearanceGetEndpointResponse';
    protected $isActive;
    protected $allowOrigination;
    protected $allowTermination;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetEndpointResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowOrigination($allowOrigination = null)
    {
        $this->allowOrigination = new PrimitiveType($allowOrigination);
        $this->allowOrigination->setElementName('allowOrigination');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOrigination
     */
    public function getAllowOrigination()
    {
        return ($this->allowOrigination)
            ? $this->allowOrigination->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowTermination($allowTermination = null)
    {
        $this->allowTermination = new PrimitiveType($allowTermination);
        $this->allowTermination->setElementName('allowTermination');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTermination
     */
    public function getAllowTermination()
    {
        return ($this->allowTermination)
            ? $this->allowTermination->getElementValue()
            : null;
    }
}
