<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingRealmDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBwDiameterRoutingRealmDeleteRequest';
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
        $this->instance->setElementName('instance');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPeerInstance $instance
     */
    public function getInstance()
    {
        return ($this->instance)
            ? $this->instance->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
        $this->realm->setElementName('realm');
        return $this;
    }

    /**
     * 
     * @return DomainName $realm
     */
    public function getRealm()
    {
        return ($this->realm)
            ? $this->realm->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
        $this->applicationId->setElementName('applicationId');
        return $this;
    }

    /**
     * 
     * @return BwDiameterApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId)
            ? $this->applicationId->getElementValue()
            : null;
    }
}
