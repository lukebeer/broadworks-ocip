<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserINIntegrationGetRequest
 */
class UserINIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserINIntegrationGetResponse';
    protected $originatingServiceKey;
    protected $terminatingServiceKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration\UserINIntegrationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOriginatingServiceKey($originatingServiceKey = null)
    {
        $this->originatingServiceKey = ($originatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $originatingServiceKey
             : new MobilityManagerServiceKey($originatingServiceKey);
        $this->originatingServiceKey->setElementName('originatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $originatingServiceKey
     */
    public function getOriginatingServiceKey()
    {
        return ($this->originatingServiceKey)
            ? $this->originatingServiceKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTerminatingServiceKey($terminatingServiceKey = null)
    {
        $this->terminatingServiceKey = ($terminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $terminatingServiceKey
             : new MobilityManagerServiceKey($terminatingServiceKey);
        $this->terminatingServiceKey->setElementName('terminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $terminatingServiceKey
     */
    public function getTerminatingServiceKey()
    {
        return ($this->terminatingServiceKey)
            ? $this->terminatingServiceKey->getElementValue()
            : null;
    }
}
