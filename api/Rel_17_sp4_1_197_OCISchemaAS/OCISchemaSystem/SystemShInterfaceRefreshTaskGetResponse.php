<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemShInterfaceRefreshTaskGetRequest.  Provides the status of the system refresh task.  If isRunning is false, numberPublicIdentityRefreshStarted and numberPublicIdentities are omitted.  If isRunning is true, numberPublicIdentities indicates the total number of public identities in the system that will be refreshed by the system refresh task; numberPublicIdentityRefreshesStarted indicates the total number of public identities for which a refresh has been started.
 */
class SystemShInterfaceRefreshTaskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'SystemShInterfaceRefreshTaskGetResponse';
    protected $isRunning                            = null;
    protected $numberPublicIdentityRefreshesStarted = null;
    protected $numberPublicIdentities               = null;

    /**
     * @return SystemShInterfaceRefreshTaskGetResponse
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
        if (!$isRunning) return $this;
        $this->isRunning = new PrimitiveType($isRunning);
        $this->isRunning->setName('isRunning');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsRunning()
    {
        return $this->isRunning->getValue();
    }

    /**
     * 
     */
    public function setNumberPublicIdentityRefreshesStarted($numberPublicIdentityRefreshesStarted = null)
    {
        if (!$numberPublicIdentityRefreshesStarted) return $this;
        $this->numberPublicIdentityRefreshesStarted = new PrimitiveType($numberPublicIdentityRefreshesStarted);
        $this->numberPublicIdentityRefreshesStarted->setName('numberPublicIdentityRefreshesStarted');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getNumberPublicIdentityRefreshesStarted()
    {
        return $this->numberPublicIdentityRefreshesStarted->getValue();
    }

    /**
     * 
     */
    public function setNumberPublicIdentities($numberPublicIdentities = null)
    {
        if (!$numberPublicIdentities) return $this;
        $this->numberPublicIdentities = new PrimitiveType($numberPublicIdentities);
        $this->numberPublicIdentities->setName('numberPublicIdentities');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getNumberPublicIdentities()
    {
        return $this->numberPublicIdentities->getValue();
    }
}
