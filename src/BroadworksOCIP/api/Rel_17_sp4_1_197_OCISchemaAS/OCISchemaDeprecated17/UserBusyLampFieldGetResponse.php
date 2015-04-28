<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Replaced by: UserBusyLampFieldGetResponse16sp2
 *        
 *         Response to UserBusyLampFieldGetRequest.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBusyLampFieldGetResponse';
    protected $listURI;
    protected $monitoredUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserBusyLampFieldGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setListURI($listURI = null)
    {
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
        $this->listURI->setElementName('listURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $listURI
     */
    public function getListURI()
    {
        return ($this->listURI)
            ? $this->listURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMonitoredUserTable(TableType $monitoredUserTable = null)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        $this->monitoredUserTable->setElementName('monitoredUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable;
    }
}
