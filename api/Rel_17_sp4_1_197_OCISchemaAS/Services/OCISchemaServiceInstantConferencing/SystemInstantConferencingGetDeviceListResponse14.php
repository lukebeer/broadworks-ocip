<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemInstantConferencingGetDeviceListRequest14. The table column headings are: "Device Name",
 *         "Device Type", "Integrated" and "Cluster Net Address".
 */
class SystemInstantConferencingGetDeviceListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'SystemInstantConferencingGetDeviceListResponse14';
    protected $instantConferencingDeviceTable = null;

    /**
     * @return SystemInstantConferencingGetDeviceListResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantConferencingDeviceTable(TableType $instantConferencingDeviceTable = null)
    {
        if (!$instantConferencingDeviceTable) return $this;
        $this->instantConferencingDeviceTable = $instantConferencingDeviceTable;
        $this->instantConferencingDeviceTable->setName('instantConferencingDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInstantConferencingDeviceTable()
    {
        return $this->instantConferencingDeviceTable;
    }
}
