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
 * Response to SystemCallingNameRetrievalGetRequest17sp4.
 */
class SystemCallingNameRetrievalGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                                         = 'SystemCallingNameRetrievalGetResponse17sp4';
    protected $triggerCNAMQueriesForAllNetworkCalls         = null;
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;
    protected $queryProtocol                                = null;
    protected $queryTimeoutMilliseconds                     = null;
    protected $sipExternalDatabaseNetAddress                = null;
    protected $sipExternalDatabasePort                      = null;
    protected $sipExternalDatabaseTransport                 = null;
    protected $soapExternalDatabaseNetAddress               = null;
    protected $soapSupportsDNSSRV                           = null;
    protected $callingNameSource                            = null;

    /**
     * @return SystemCallingNameRetrievalGetResponse17sp4
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
        if (!$triggerCNAMQueriesForAllNetworkCalls) return $this;
        $this->triggerCNAMQueriesForAllNetworkCalls = new PrimitiveType($triggerCNAMQueriesForAllNetworkCalls);
        $this->triggerCNAMQueriesForAllNetworkCalls->setName('triggerCNAMQueriesForAllNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return $this->triggerCNAMQueriesForAllNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls = null)
    {
        if (!$triggerCNAMQueriesForGroupAndEnterpriseCalls) return $this;
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = new PrimitiveType($triggerCNAMQueriesForGroupAndEnterpriseCalls);
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->setName('triggerCNAMQueriesForGroupAndEnterpriseCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->getValue();
    }

    /**
     * 
     */
    public function setQueryProtocol($queryProtocol = null)
    {
        if (!$queryProtocol) return $this;
        $this->queryProtocol = ($queryProtocol InstanceOf CallingNameRetrievalQueryProtocol)
             ? $queryProtocol
             : new CallingNameRetrievalQueryProtocol($queryProtocol);
        $this->queryProtocol->setName('queryProtocol');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryProtocol
     */
    public function getQueryProtocol()
    {
        return $this->queryProtocol->getValue();
    }

    /**
     * 
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds = null)
    {
        if (!$queryTimeoutMilliseconds) return $this;
        $this->queryTimeoutMilliseconds = ($queryTimeoutMilliseconds InstanceOf CallingNameRetrievalQueryTimeoutMilliseconds)
             ? $queryTimeoutMilliseconds
             : new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
        $this->queryTimeoutMilliseconds->setName('queryTimeoutMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryTimeoutMilliseconds
     */
    public function getQueryTimeoutMilliseconds()
    {
        return $this->queryTimeoutMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        if (!$sipExternalDatabaseNetAddress) return $this;
        $this->sipExternalDatabaseNetAddress = ($sipExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $sipExternalDatabaseNetAddress
             : new NetAddress($sipExternalDatabaseNetAddress);
        $this->sipExternalDatabaseNetAddress->setName('sipExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return $this->sipExternalDatabaseNetAddress->getValue();
    }

    /**
     * 
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        if (!$sipExternalDatabasePort) return $this;
        $this->sipExternalDatabasePort = ($sipExternalDatabasePort InstanceOf Port1025)
             ? $sipExternalDatabasePort
             : new Port1025($sipExternalDatabasePort);
        $this->sipExternalDatabasePort->setName('sipExternalDatabasePort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getSipExternalDatabasePort()
    {
        return $this->sipExternalDatabasePort->getValue();
    }

    /**
     * 
     */
    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport = null)
    {
        if (!$sipExternalDatabaseTransport) return $this;
        $this->sipExternalDatabaseTransport = ($sipExternalDatabaseTransport InstanceOf TransportProtocol)
             ? $sipExternalDatabaseTransport
             : new TransportProtocol($sipExternalDatabaseTransport);
        $this->sipExternalDatabaseTransport->setName('sipExternalDatabaseTransport');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol
     */
    public function getSipExternalDatabaseTransport()
    {
        return $this->sipExternalDatabaseTransport->getValue();
    }

    /**
     * 
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        if (!$soapExternalDatabaseNetAddress) return $this;
        $this->soapExternalDatabaseNetAddress = ($soapExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $soapExternalDatabaseNetAddress
             : new NetAddress($soapExternalDatabaseNetAddress);
        $this->soapExternalDatabaseNetAddress->setName('soapExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return $this->soapExternalDatabaseNetAddress->getValue();
    }

    /**
     * 
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV = null)
    {
        if (!$soapSupportsDNSSRV) return $this;
        $this->soapSupportsDNSSRV = new PrimitiveType($soapSupportsDNSSRV);
        $this->soapSupportsDNSSRV->setName('soapSupportsDNSSRV');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSoapSupportsDNSSRV()
    {
        return $this->soapSupportsDNSSRV->getValue();
    }

    /**
     * 
     */
    public function setCallingNameSource($callingNameSource = null)
    {
        if (!$callingNameSource) return $this;
        $this->callingNameSource = ($callingNameSource InstanceOf CallingNameRetrievalSourceIdentity)
             ? $callingNameSource
             : new CallingNameRetrievalSourceIdentity($callingNameSource);
        $this->callingNameSource->setName('callingNameSource');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalSourceIdentity
     */
    public function getCallingNameSource()
    {
        return $this->callingNameSource->getValue();
    }
}
