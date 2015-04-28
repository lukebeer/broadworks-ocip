<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted and numberPublicIdentities are omitted.  If isRunning is true, numberPublicIdentities indicates the total number of public identities in the system that will be refreshed by the system refresh task; numberPublicIdentityRefreshesStarted indicates the total number of public identities for which a refresh has been started.
 */
class SystemShInterfaceRefreshTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemShInterfaceRefreshTaskGetResponse';
    protected $isRunning;
    protected $numberPublicIdentityRefreshesStarted;
    protected $numberPublicIdentities;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemShInterfaceRefreshTaskGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsRunning($isRunning = null)
    {
        $this->isRunning = new PrimitiveType($isRunning);
        $this->isRunning->setElementName('isRunning');
        return $this;
    }

    /**
     * 
     * @return boolean $isRunning
     */
    public function getIsRunning()
    {
        return ($this->isRunning)
            ? $this->isRunning->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted = null)
    {
        $this->numberPublicIdentityRefreshesStarted = new PrimitiveType($numberPublicIdentityRefreshesStarted);
        $this->numberPublicIdentityRefreshesStarted->setElementName('numberPublicIdentityRefreshesStarted');
        return $this;
    }

    /**
     * 
     * @return int $numberPublicIdentityRefreshesStarted
     */
    public function getNumberPublicIdentityRefreshesStarted()
    {
        return ($this->numberPublicIdentityRefreshesStarted)
            ? $this->numberPublicIdentityRefreshesStarted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberPublicIdentities($numberPublicIdentities = null)
    {
        $this->numberPublicIdentities = new PrimitiveType($numberPublicIdentities);
        $this->numberPublicIdentities->setElementName('numberPublicIdentities');
        return $this;
    }

    /**
     * 
     * @return int $numberPublicIdentities
     */
    public function getNumberPublicIdentities()
    {
        return ($this->numberPublicIdentities)
            ? $this->numberPublicIdentities->getElementValue()
            : null;
    }
}
