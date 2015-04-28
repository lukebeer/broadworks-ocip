<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse17
 */
class SystemHuntGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemHuntGroupGetResponse';
    protected $anonymousInsteadOfPrivateCLID;
    protected $removeHuntGroupNameFromCLID;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemHuntGroupGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAnonymousInsteadOfPrivateCLID($anonymousInsteadOfPrivateCLID = null)
    {
        $this->anonymousInsteadOfPrivateCLID = new PrimitiveType($anonymousInsteadOfPrivateCLID);
        $this->anonymousInsteadOfPrivateCLID->setElementName('anonymousInsteadOfPrivateCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $anonymousInsteadOfPrivateCLID
     */
    public function getAnonymousInsteadOfPrivateCLID()
    {
        return ($this->anonymousInsteadOfPrivateCLID)
            ? $this->anonymousInsteadOfPrivateCLID->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoveHuntGroupNameFromCLID($removeHuntGroupNameFromCLID = null)
    {
        $this->removeHuntGroupNameFromCLID = new PrimitiveType($removeHuntGroupNameFromCLID);
        $this->removeHuntGroupNameFromCLID->setElementName('removeHuntGroupNameFromCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $removeHuntGroupNameFromCLID
     */
    public function getRemoveHuntGroupNameFromCLID()
    {
        return ($this->removeHuntGroupNameFromCLID)
            ? $this->removeHuntGroupNameFromCLID->getElementValue()
            : null;
    }
}
