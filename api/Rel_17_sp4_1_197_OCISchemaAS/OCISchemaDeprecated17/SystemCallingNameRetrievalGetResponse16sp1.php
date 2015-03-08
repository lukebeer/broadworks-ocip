<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallingNameRetrievalGetRequest16sp1.
 */
class SystemCallingNameRetrievalGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemCallingNameRetrievalGetResponse16sp1';
    public    $name                                         = __CLASS__;
    protected $triggerCNAMQueriesForAllNetworkCalls         = null;
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls = null;
    protected $queryProtocol                                = null;
    protected $queryTimeoutMilliseconds                     = null;
    protected $sipExternalDatabaseNetAddress                = null;
    protected $sipExternalDatabasePort                      = null;
    protected $sipExternalDatabaseTransport                 = null;
    protected $soapExternalDatabaseNetAddress               = null;
    protected $soapSupportsDNSSRV                           = null;


    /**
     * 
     */
    public function setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls = null)
    {
        $this->triggerCNAMQueriesForAllNetworkCalls = (boolean) $triggerCNAMQueriesForAllNetworkCalls;
    }

    /**
     * 
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return (!$this->triggerCNAMQueriesForAllNetworkCalls) ?: $this->triggerCNAMQueriesForAllNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls = null)
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = (boolean) $triggerCNAMQueriesForGroupAndEnterpriseCalls;
    }

    /**
     * 
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return (!$this->triggerCNAMQueriesForGroupAndEnterpriseCalls) ?: $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->getValue();
    }

    /**
     * Query Protocol.
     */
    public function setQueryProtocol($queryProtocol = null)
    {
        $this->queryProtocol = ($queryProtocol InstanceOf CallingNameRetrievalQueryProtocol)
             ? $queryProtocol
             : new CallingNameRetrievalQueryProtocol($queryProtocol);
    }

    /**
     * Query Protocol.
     */
    public function getQueryProtocol()
    {
        return (!$this->queryProtocol) ?: $this->queryProtocol->getValue();
    }

    /**
     * Query time out milli-seconds.
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds = null)
    {
        $this->queryTimeoutMilliseconds = ($queryTimeoutMilliseconds InstanceOf CallingNameRetrievalQueryTimeoutMilliseconds)
             ? $queryTimeoutMilliseconds
             : new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
    }

    /**
     * Query time out milli-seconds.
     */
    public function getQueryTimeoutMilliseconds()
    {
        return (!$this->queryTimeoutMilliseconds) ?: $this->queryTimeoutMilliseconds->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        $this->sipExternalDatabaseNetAddress = ($sipExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $sipExternalDatabaseNetAddress
             : new NetAddress($sipExternalDatabaseNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return (!$this->sipExternalDatabaseNetAddress) ?: $this->sipExternalDatabaseNetAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        $this->sipExternalDatabasePort = ($sipExternalDatabasePort InstanceOf Port1025)
             ? $sipExternalDatabasePort
             : new Port1025($sipExternalDatabasePort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getSipExternalDatabasePort()
    {
        return (!$this->sipExternalDatabasePort) ?: $this->sipExternalDatabasePort->getValue();
    }

    /**
     * Network Transport Protocol.
     */
    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport = null)
    {
        $this->sipExternalDatabaseTransport = ($sipExternalDatabaseTransport InstanceOf TransportProtocol)
             ? $sipExternalDatabaseTransport
             : new TransportProtocol($sipExternalDatabaseTransport);
    }

    /**
     * Network Transport Protocol.
     */
    public function getSipExternalDatabaseTransport()
    {
        return (!$this->sipExternalDatabaseTransport) ?: $this->sipExternalDatabaseTransport->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        $this->soapExternalDatabaseNetAddress = ($soapExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $soapExternalDatabaseNetAddress
             : new NetAddress($soapExternalDatabaseNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return (!$this->soapExternalDatabaseNetAddress) ?: $this->soapExternalDatabaseNetAddress->getValue();
    }

    /**
     * 
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV = null)
    {
        $this->soapSupportsDNSSRV = (boolean) $soapSupportsDNSSRV;
    }

    /**
     * 
     */
    public function getSoapSupportsDNSSRV()
    {
        return (!$this->soapSupportsDNSSRV) ?: $this->soapSupportsDNSSRV->getValue();
    }
}
