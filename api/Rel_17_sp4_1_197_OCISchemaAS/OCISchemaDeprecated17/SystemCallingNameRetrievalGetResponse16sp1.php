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
    public    $name                                          = __CLASS__;
    protected $triggerCNAMQueriesForAllNetworkCalls          = null;
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls  = null;
    protected $queryProtocol                                 = null;
    protected $queryTimeoutMilliseconds                      = null;
    protected $sipExternalDatabaseNetAddress                 = null;
    protected $sipExternalDatabasePort                       = null;
    protected $sipExternalDatabaseTransport                  = null;
    protected $soapExternalDatabaseNetAddress                = null;
    protected $soapSupportsDNSSRV                            = null;


    public function setTriggerCNAMQueriesForAllNetworkCalls(xs:boolean $triggerCNAMQueriesForAllNetworkCalls = null)
    {
    }

    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return (!$this->triggerCNAMQueriesForAllNetworkCalls) ?: $this->triggerCNAMQueriesForAllNetworkCalls->value();
    }

    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls(xs:boolean $triggerCNAMQueriesForGroupAndEnterpriseCalls = null)
    {
    }

    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return (!$this->triggerCNAMQueriesForGroupAndEnterpriseCalls) ?: $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->value();
    }

    public function setQueryProtocol($queryProtocol = null)
    {
        $this->queryProtocol = ($queryProtocol InstanceOf CallingNameRetrievalQueryProtocol)
             ? $queryProtocol
             : new CallingNameRetrievalQueryProtocol($queryProtocol);
    }

    public function getQueryProtocol()
    {
        return (!$this->queryProtocol) ?: $this->queryProtocol->value();
    }

    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds = null)
    {
        $this->queryTimeoutMilliseconds = ($queryTimeoutMilliseconds InstanceOf CallingNameRetrievalQueryTimeoutMilliseconds)
             ? $queryTimeoutMilliseconds
             : new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
    }

    public function getQueryTimeoutMilliseconds()
    {
        return (!$this->queryTimeoutMilliseconds) ?: $this->queryTimeoutMilliseconds->value();
    }

    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        $this->sipExternalDatabaseNetAddress = ($sipExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $sipExternalDatabaseNetAddress
             : new NetAddress($sipExternalDatabaseNetAddress);
    }

    public function getSipExternalDatabaseNetAddress()
    {
        return (!$this->sipExternalDatabaseNetAddress) ?: $this->sipExternalDatabaseNetAddress->value();
    }

    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        $this->sipExternalDatabasePort = ($sipExternalDatabasePort InstanceOf Port1025)
             ? $sipExternalDatabasePort
             : new Port1025($sipExternalDatabasePort);
    }

    public function getSipExternalDatabasePort()
    {
        return (!$this->sipExternalDatabasePort) ?: $this->sipExternalDatabasePort->value();
    }

    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport = null)
    {
        $this->sipExternalDatabaseTransport = ($sipExternalDatabaseTransport InstanceOf TransportProtocol)
             ? $sipExternalDatabaseTransport
             : new TransportProtocol($sipExternalDatabaseTransport);
    }

    public function getSipExternalDatabaseTransport()
    {
        return (!$this->sipExternalDatabaseTransport) ?: $this->sipExternalDatabaseTransport->value();
    }

    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        $this->soapExternalDatabaseNetAddress = ($soapExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $soapExternalDatabaseNetAddress
             : new NetAddress($soapExternalDatabaseNetAddress);
    }

    public function getSoapExternalDatabaseNetAddress()
    {
        return (!$this->soapExternalDatabaseNetAddress) ?: $this->soapExternalDatabaseNetAddress->value();
    }

    public function setSoapSupportsDNSSRV(xs:boolean $soapSupportsDNSSRV = null)
    {
    }

    public function getSoapSupportsDNSSRV()
    {
        return (!$this->soapSupportsDNSSRV) ?: $this->soapSupportsDNSSRV->value();
    }
}
