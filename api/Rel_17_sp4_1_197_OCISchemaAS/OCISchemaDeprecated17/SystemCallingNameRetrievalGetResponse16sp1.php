<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingNameRetrievalQueryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingNameRetrievalQueryTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallingNameRetrievalGetRequest16sp1.
 */
class SystemCallingNameRetrievalGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $triggerCNAMQueriesForAllNetworkCalls,
             $triggerCNAMQueriesForGroupAndEnterpriseCalls,
             $queryProtocol,
             $queryTimeoutMilliseconds,
             $sipExternalDatabaseNetAddress=null,
             $sipExternalDatabasePort=null,
             $sipExternalDatabaseTransport,
             $soapExternalDatabaseNetAddress=null,
             $soapSupportsDNSSRV
    ) {
        $this->triggerCNAMQueriesForAllNetworkCalls         = $triggerCNAMQueriesForAllNetworkCalls;
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = $triggerCNAMQueriesForGroupAndEnterpriseCalls;
        $this->queryProtocol                                = $queryProtocol;
        $this->queryTimeoutMilliseconds                     = $queryTimeoutMilliseconds;
        $this->sipExternalDatabaseNetAddress                = new NetAddress($sipExternalDatabaseNetAddress);
        $this->sipExternalDatabasePort                      = new Port1025($sipExternalDatabasePort);
        $this->sipExternalDatabaseTransport                 = new TransportProtocol($sipExternalDatabaseTransport);
        $this->soapExternalDatabaseNetAddress               = new NetAddress($soapExternalDatabaseNetAddress);
        $this->soapSupportsDNSSRV                           = $soapSupportsDNSSRV;
        $this->args                                         = func_get_args();
    }

    public function setTriggerCNAMQueriesForAllNetworkCalls($triggerCNAMQueriesForAllNetworkCalls)
    {
        $triggerCNAMQueriesForAllNetworkCalls and $this->triggerCNAMQueriesForAllNetworkCalls = new xs:boolean($triggerCNAMQueriesForAllNetworkCalls);
    }

    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return (!$this->triggerCNAMQueriesForAllNetworkCalls) ?: $this->triggerCNAMQueriesForAllNetworkCalls->value();
    }

    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls)
    {
        $triggerCNAMQueriesForGroupAndEnterpriseCalls and $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = new xs:boolean($triggerCNAMQueriesForGroupAndEnterpriseCalls);
    }

    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return (!$this->triggerCNAMQueriesForGroupAndEnterpriseCalls) ?: $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->value();
    }

    public function setQueryProtocol($queryProtocol)
    {
        $queryProtocol and $this->queryProtocol = new CallingNameRetrievalQueryProtocol($queryProtocol);
    }

    public function getQueryProtocol()
    {
        return (!$this->queryProtocol) ?: $this->queryProtocol->value();
    }

    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds)
    {
        $queryTimeoutMilliseconds and $this->queryTimeoutMilliseconds = new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
    }

    public function getQueryTimeoutMilliseconds()
    {
        return (!$this->queryTimeoutMilliseconds) ?: $this->queryTimeoutMilliseconds->value();
    }

    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress)
    {
        $sipExternalDatabaseNetAddress and $this->sipExternalDatabaseNetAddress = new NetAddress($sipExternalDatabaseNetAddress);
    }

    public function getSipExternalDatabaseNetAddress()
    {
        return (!$this->sipExternalDatabaseNetAddress) ?: $this->sipExternalDatabaseNetAddress->value();
    }

    public function setSipExternalDatabasePort($sipExternalDatabasePort)
    {
        $sipExternalDatabasePort and $this->sipExternalDatabasePort = new Port1025($sipExternalDatabasePort);
    }

    public function getSipExternalDatabasePort()
    {
        return (!$this->sipExternalDatabasePort) ?: $this->sipExternalDatabasePort->value();
    }

    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport)
    {
        $sipExternalDatabaseTransport and $this->sipExternalDatabaseTransport = new TransportProtocol($sipExternalDatabaseTransport);
    }

    public function getSipExternalDatabaseTransport()
    {
        return (!$this->sipExternalDatabaseTransport) ?: $this->sipExternalDatabaseTransport->value();
    }

    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress)
    {
        $soapExternalDatabaseNetAddress and $this->soapExternalDatabaseNetAddress = new NetAddress($soapExternalDatabaseNetAddress);
    }

    public function getSoapExternalDatabaseNetAddress()
    {
        return (!$this->soapExternalDatabaseNetAddress) ?: $this->soapExternalDatabaseNetAddress->value();
    }

    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV)
    {
        $soapSupportsDNSSRV and $this->soapSupportsDNSSRV = new xs:boolean($soapSupportsDNSSRV);
    }

    public function getSoapSupportsDNSSRV()
    {
        return (!$this->soapSupportsDNSSRV) ?: $this->soapSupportsDNSSRV->value();
    }
}
