<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalSourceIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingNameRetrievalModifyRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallingNameRetrievalModifyRequest16sp1';
    protected $triggerCNAMQueriesForAllNetworkCalls;
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls;
    protected $queryProtocol;
    protected $queryTimeoutMilliseconds;
    protected $sipExternalDatabaseNetAddress;
    protected $sipExternalDatabasePort;
    protected $sipExternalDatabaseTransport;
    protected $soapExternalDatabaseNetAddress;
    protected $soapSupportsDNSSRV;
    protected $callingNameSource;

    public function __construct(
         $triggerCNAMQueriesForAllNetworkCalls = null,
         $triggerCNAMQueriesForGroupAndEnterpriseCalls = null,
         $queryProtocol = null,
         $queryTimeoutMilliseconds = null,
         $sipExternalDatabaseNetAddress = null,
         $sipExternalDatabasePort = null,
         $sipExternalDatabaseTransport = null,
         $soapExternalDatabaseNetAddress = null,
         $soapSupportsDNSSRV = null,
         $callingNameSource = null
    ) {
        $this->setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls);
        $this->setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls);
        $this->setQueryProtocol($queryProtocol);
        $this->setQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
        $this->setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress);
        $this->setSipExternalDatabasePort($sipExternalDatabasePort);
        $this->setSipExternalDatabaseTransport($sipExternalDatabaseTransport);
        $this->setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress);
        $this->setSoapSupportsDNSSRV($soapSupportsDNSSRV);
        $this->setCallingNameSource($callingNameSource);
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
    public function setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls = null)
    {
        $this->triggerCNAMQueriesForAllNetworkCalls = new PrimitiveType($triggerCNAMQueriesForAllNetworkCalls);
        $this->triggerCNAMQueriesForAllNetworkCalls->setName('triggerCNAMQueriesForAllNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $triggerCNAMQueriesForAllNetworkCalls
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return ($this->triggerCNAMQueriesForAllNetworkCalls) ? $this->triggerCNAMQueriesForAllNetworkCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls = null)
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = new PrimitiveType($triggerCNAMQueriesForGroupAndEnterpriseCalls);
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->setName('triggerCNAMQueriesForGroupAndEnterpriseCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $triggerCNAMQueriesForGroupAndEnterpriseCalls
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return ($this->triggerCNAMQueriesForGroupAndEnterpriseCalls) ? $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setQueryProtocol($queryProtocol = null)
    {
        $this->queryProtocol = ($queryProtocol InstanceOf CallingNameRetrievalQueryProtocol)
             ? $queryProtocol
             : new CallingNameRetrievalQueryProtocol($queryProtocol);
        $this->queryProtocol->setName('queryProtocol');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryProtocol $queryProtocol
     */
    public function getQueryProtocol()
    {
        return ($this->queryProtocol) ? $this->queryProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds = null)
    {
        $this->queryTimeoutMilliseconds = ($queryTimeoutMilliseconds InstanceOf CallingNameRetrievalQueryTimeoutMilliseconds)
             ? $queryTimeoutMilliseconds
             : new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
        $this->queryTimeoutMilliseconds->setName('queryTimeoutMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryTimeoutMilliseconds $queryTimeoutMilliseconds
     */
    public function getQueryTimeoutMilliseconds()
    {
        return ($this->queryTimeoutMilliseconds) ? $this->queryTimeoutMilliseconds->getValue() : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        $this->sipExternalDatabaseNetAddress = ($sipExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $sipExternalDatabaseNetAddress
             : new NetAddress($sipExternalDatabaseNetAddress);
        $this->sipExternalDatabaseNetAddress->setName('sipExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $sipExternalDatabaseNetAddress
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return ($this->sipExternalDatabaseNetAddress) ? $this->sipExternalDatabaseNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        $this->sipExternalDatabasePort = ($sipExternalDatabasePort InstanceOf Port1025)
             ? $sipExternalDatabasePort
             : new Port1025($sipExternalDatabasePort);
        $this->sipExternalDatabasePort->setName('sipExternalDatabasePort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $sipExternalDatabasePort
     */
    public function getSipExternalDatabasePort()
    {
        return ($this->sipExternalDatabasePort) ? $this->sipExternalDatabasePort->getValue() : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport = null)
    {
        $this->sipExternalDatabaseTransport = ($sipExternalDatabaseTransport InstanceOf TransportProtocol)
             ? $sipExternalDatabaseTransport
             : new TransportProtocol($sipExternalDatabaseTransport);
        $this->sipExternalDatabaseTransport->setName('sipExternalDatabaseTransport');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $sipExternalDatabaseTransport
     */
    public function getSipExternalDatabaseTransport()
    {
        return ($this->sipExternalDatabaseTransport) ? $this->sipExternalDatabaseTransport->getValue() : null;
    }

    /**
     * 
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        $this->soapExternalDatabaseNetAddress = ($soapExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $soapExternalDatabaseNetAddress
             : new NetAddress($soapExternalDatabaseNetAddress);
        $this->soapExternalDatabaseNetAddress->setName('soapExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $soapExternalDatabaseNetAddress
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return ($this->soapExternalDatabaseNetAddress) ? $this->soapExternalDatabaseNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV = null)
    {
        $this->soapSupportsDNSSRV = new PrimitiveType($soapSupportsDNSSRV);
        $this->soapSupportsDNSSRV->setName('soapSupportsDNSSRV');
        return $this;
    }

    /**
     * 
     * @return boolean $soapSupportsDNSSRV
     */
    public function getSoapSupportsDNSSRV()
    {
        return ($this->soapSupportsDNSSRV) ? $this->soapSupportsDNSSRV->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingNameSource($callingNameSource = null)
    {
        $this->callingNameSource = ($callingNameSource InstanceOf CallingNameRetrievalSourceIdentity)
             ? $callingNameSource
             : new CallingNameRetrievalSourceIdentity($callingNameSource);
        $this->callingNameSource->setName('callingNameSource');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalSourceIdentity $callingNameSource
     */
    public function getCallingNameSource()
    {
        return ($this->callingNameSource) ? $this->callingNameSource->getValue() : null;
    }
}
