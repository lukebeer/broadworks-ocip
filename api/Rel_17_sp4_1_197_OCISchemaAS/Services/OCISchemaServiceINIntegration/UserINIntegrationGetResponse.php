<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserINIntegrationGetRequest
 */
class UserINIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserINIntegrationGetResponse';
    protected $originatingServiceKey;
    protected $terminatingServiceKey;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration\UserINIntegrationGetResponse $response
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
        $this->originatingServiceKey->setName('originatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $originatingServiceKey
     */
    public function getOriginatingServiceKey()
    {
        return ($this->originatingServiceKey) ? $this->originatingServiceKey->getValue() : null;
    }

    /**
     * 
     */
    public function setTerminatingServiceKey($terminatingServiceKey = null)
    {
        $this->terminatingServiceKey = ($terminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $terminatingServiceKey
             : new MobilityManagerServiceKey($terminatingServiceKey);
        $this->terminatingServiceKey->setName('terminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $terminatingServiceKey
     */
    public function getTerminatingServiceKey()
    {
        return ($this->terminatingServiceKey) ? $this->terminatingServiceKey->getValue() : null;
    }
}
