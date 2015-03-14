<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingRealmModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'SystemBwDiameterRoutingRealmModifyRequest';
    protected $instance      = null;
    protected $realm         = null;
    protected $applicationId = null;
    protected $default       = null;

    public function __construct(
         $instance,
         $realm,
         $applicationId,
         $default = null
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setDefault($default);
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
        if (!$instance) return $this;
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
        return $this->instance->getValue();
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        if (!$realm) return $this;
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
        return $this->realm->getValue();
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        if (!$applicationId) return $this;
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
        return $this->applicationId->getValue();
    }

    /**
     * 
     */
    public function setDefault($default = null)
    {
        if (!$default) return $this;
        $this->default = new PrimitiveType($default);
        $this->default->setName('default');
        return $this;
    }

    /**
     * 
     * @return boolean $default
     */
    public function getDefault()
    {
        return $this->default->getValue();
    }
}
