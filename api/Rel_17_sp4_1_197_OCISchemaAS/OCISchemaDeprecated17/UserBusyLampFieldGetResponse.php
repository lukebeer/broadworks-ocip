<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replaced by: UserBusyLampFieldGetResponse16sp2
 *        
 *         Response to UserBusyLampFieldGetRequest.
 *         The table has column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserBusyLampFieldGetResponse';
    protected $listURI            = null;
    protected $monitoredUserTable = null;

    /**
     * @return UserBusyLampFieldGetResponse
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
        if (!$listURI) return $this;
        $this->listURI = ($listURI InstanceOf SIPURI)
             ? $listURI
             : new SIPURI($listURI);
        $this->listURI->setName('listURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI
     */
    public function getListURI()
    {
        return $this->listURI->getValue();
    }

    /**
     * 
     */
    public function setMonitoredUserTable(TableType $monitoredUserTable = null)
    {
        if (!$monitoredUserTable) return $this;
        $this->monitoredUserTable = $monitoredUserTable;
        $this->monitoredUserTable->setName('monitoredUserTable');
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
