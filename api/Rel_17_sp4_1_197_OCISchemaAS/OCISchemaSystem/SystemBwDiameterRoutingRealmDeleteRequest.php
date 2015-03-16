<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingRealmDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBwDiameterRoutingRealmDeleteRequest';
    protected $instance;
    protected $realm;
    protected $applicationId;

    public function __construct(
         $instance = '',
         $realm = '',
         $applicationId = ''
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
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
    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
        $this->instance->setName('instance');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPeerInstance $instance
     */
    public function getInstance()
    {
        return ($this->instance) ? $this->instance->getValue() : null;
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
        $this->realm->setName('realm');
        return $this;
    }

    /**
     * 
     * @return DomainName $realm
     */
    public function getRealm()
    {
        return ($this->realm) ? $this->realm->getValue() : null;
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return BwDiameterApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId) ? $this->applicationId->getValue() : null;
    }
}
