<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the user level IN Integration service attributes
 *         Response is either SuccessResponse or ErrorResponse
 */
class UserINIntegrationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserINIntegrationModifyRequest';
    protected $userId;
    protected $originatingServiceKey;
    protected $terminatingServiceKey;

    public function __construct(
         $userId = '',
         $originatingServiceKey = null,
         $terminatingServiceKey = null
    ) {
        $this->setUserId($userId);
        $this->setOriginatingServiceKey($originatingServiceKey);
        $this->setTerminatingServiceKey($terminatingServiceKey);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
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
