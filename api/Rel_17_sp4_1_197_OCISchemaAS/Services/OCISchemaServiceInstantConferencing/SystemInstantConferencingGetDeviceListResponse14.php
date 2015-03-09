<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetDeviceListResponse14;
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
    public    $name                           = __CLASS__;
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
    public function setInstantConferencingDeviceTable(core:OCITable $instantConferencingDeviceTable = null)
    {
        $this->instantConferencingDeviceTable =  $instantConferencingDeviceTable;
    }

    /**
     * 
     */
    public function getInstantConferencingDeviceTable()
    {
        return (!$this->instantConferencingDeviceTable) ?: $this->instantConferencingDeviceTable->getValue();
    }
}
