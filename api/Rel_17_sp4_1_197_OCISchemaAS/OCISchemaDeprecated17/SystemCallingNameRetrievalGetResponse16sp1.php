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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallingNameRetrievalGetRequest16sp1.
 */
class SystemCallingNameRetrievalGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingNameRetrievalGetResponse16sp1';
    protected $triggerCNAMQueriesForAllNetworkCalls;
    protected $triggerCNAMQueriesForGroupAndEnterpriseCalls;
    protected $queryProtocol;
    protected $queryTimeoutMilliseconds;
    protected $sipExternalDatabaseNetAddress;
    protected $sipExternalDatabasePort;
    protected $sipExternalDatabaseTransport;
    protected $soapExternalDatabaseNetAddress;
    protected $soapSupportsDNSSRV;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemCallingNameRetrievalGetResponse16sp1 $response
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
        $this->triggerCNAMQueriesForAllNetworkCalls->setElementName('triggerCNAMQueriesForAllNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $triggerCNAMQueriesForAllNetworkCalls
     */
    public function getTriggerCNAMQueriesForAllNetworkCalls()
    {
        return ($this->triggerCNAMQueriesForAllNetworkCalls)
            ? $this->triggerCNAMQueriesForAllNetworkCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTriggerCNAMQueriesForGroupAndEnterpriseCalls($triggerCNAMQueriesForGroupAndEnterpriseCalls = null)
    {
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls = new PrimitiveType($triggerCNAMQueriesForGroupAndEnterpriseCalls);
        $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->setElementName('triggerCNAMQueriesForGroupAndEnterpriseCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $triggerCNAMQueriesForGroupAndEnterpriseCalls
     */
    public function getTriggerCNAMQueriesForGroupAndEnterpriseCalls()
    {
        return ($this->triggerCNAMQueriesForGroupAndEnterpriseCalls)
            ? $this->triggerCNAMQueriesForGroupAndEnterpriseCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueryProtocol($queryProtocol = null)
    {
        $this->queryProtocol = ($queryProtocol InstanceOf CallingNameRetrievalQueryProtocol)
             ? $queryProtocol
             : new CallingNameRetrievalQueryProtocol($queryProtocol);
        $this->queryProtocol->setElementName('queryProtocol');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryProtocol $queryProtocol
     */
    public function getQueryProtocol()
    {
        return ($this->queryProtocol)
            ? $this->queryProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueryTimeoutMilliseconds($queryTimeoutMilliseconds = null)
    {
        $this->queryTimeoutMilliseconds = ($queryTimeoutMilliseconds InstanceOf CallingNameRetrievalQueryTimeoutMilliseconds)
             ? $queryTimeoutMilliseconds
             : new CallingNameRetrievalQueryTimeoutMilliseconds($queryTimeoutMilliseconds);
        $this->queryTimeoutMilliseconds->setElementName('queryTimeoutMilliseconds');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalQueryTimeoutMilliseconds $queryTimeoutMilliseconds
     */
    public function getQueryTimeoutMilliseconds()
    {
        return ($this->queryTimeoutMilliseconds)
            ? $this->queryTimeoutMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabaseNetAddress($sipExternalDatabaseNetAddress = null)
    {
        $this->sipExternalDatabaseNetAddress = ($sipExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $sipExternalDatabaseNetAddress
             : new NetAddress($sipExternalDatabaseNetAddress);
        $this->sipExternalDatabaseNetAddress->setElementName('sipExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $sipExternalDatabaseNetAddress
     */
    public function getSipExternalDatabaseNetAddress()
    {
        return ($this->sipExternalDatabaseNetAddress)
            ? $this->sipExternalDatabaseNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabasePort($sipExternalDatabasePort = null)
    {
        $this->sipExternalDatabasePort = ($sipExternalDatabasePort InstanceOf Port1025)
             ? $sipExternalDatabasePort
             : new Port1025($sipExternalDatabasePort);
        $this->sipExternalDatabasePort->setElementName('sipExternalDatabasePort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $sipExternalDatabasePort
     */
    public function getSipExternalDatabasePort()
    {
        return ($this->sipExternalDatabasePort)
            ? $this->sipExternalDatabasePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipExternalDatabaseTransport($sipExternalDatabaseTransport = null)
    {
        $this->sipExternalDatabaseTransport = ($sipExternalDatabaseTransport InstanceOf TransportProtocol)
             ? $sipExternalDatabaseTransport
             : new TransportProtocol($sipExternalDatabaseTransport);
        $this->sipExternalDatabaseTransport->setElementName('sipExternalDatabaseTransport');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $sipExternalDatabaseTransport
     */
    public function getSipExternalDatabaseTransport()
    {
        return ($this->sipExternalDatabaseTransport)
            ? $this->sipExternalDatabaseTransport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSoapExternalDatabaseNetAddress($soapExternalDatabaseNetAddress = null)
    {
        $this->soapExternalDatabaseNetAddress = ($soapExternalDatabaseNetAddress InstanceOf NetAddress)
             ? $soapExternalDatabaseNetAddress
             : new NetAddress($soapExternalDatabaseNetAddress);
        $this->soapExternalDatabaseNetAddress->setElementName('soapExternalDatabaseNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $soapExternalDatabaseNetAddress
     */
    public function getSoapExternalDatabaseNetAddress()
    {
        return ($this->soapExternalDatabaseNetAddress)
            ? $this->soapExternalDatabaseNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSoapSupportsDNSSRV($soapSupportsDNSSRV = null)
    {
        $this->soapSupportsDNSSRV = new PrimitiveType($soapSupportsDNSSRV);
        $this->soapSupportsDNSSRV->setElementName('soapSupportsDNSSRV');
        return $this;
    }

    /**
     * 
     * @return boolean $soapSupportsDNSSRV
     */
    public function getSoapSupportsDNSSRV()
    {
        return ($this->soapSupportsDNSSRV)
            ? $this->soapSupportsDNSSRV->getElementValue()
            : null;
    }
}
