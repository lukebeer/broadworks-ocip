<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryTimeoutMilliseconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalSourceIdentity;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\CallingNameRetrievalQueryProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallingNameRetrievalGetRequest17sp4.
 */
class SystemCallingNameRetrievalGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingNameRetrievalGetResponse17sp4';
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

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingNameRetrieval\SystemCallingNameRetrievalGetResponse17sp4 $response
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

    /**
     * 
     */
    public function setCallingNameSource($callingNameSource = null)
    {
        $this->callingNameSource = ($callingNameSource InstanceOf CallingNameRetrievalSourceIdentity)
             ? $callingNameSource
             : new CallingNameRetrievalSourceIdentity($callingNameSource);
        $this->callingNameSource->setElementName('callingNameSource');
        return $this;
    }

    /**
     * 
     * @return CallingNameRetrievalSourceIdentity $callingNameSource
     */
    public function getCallingNameSource()
    {
        return ($this->callingNameSource)
            ? $this->callingNameSource->getElementValue()
            : null;
    }
}
