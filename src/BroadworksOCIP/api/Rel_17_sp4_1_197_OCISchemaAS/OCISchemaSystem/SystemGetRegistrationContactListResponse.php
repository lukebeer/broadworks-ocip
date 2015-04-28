<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemGetRegistrationContactListRequest. The table columns are: Service Provider Id, Group Id, User Id, Line/Port, Endpoint Type, Order, URI, Expiration, Contact, Device Level, Device Name.
 */
class SystemGetRegistrationContactListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemGetRegistrationContactListResponse';
    protected $registrationTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRegistrationTable(TableType $registrationTable = null)
    {
        $this->registrationTable = $registrationTable;
        $this->registrationTable->setElementName('registrationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRegistrationTable()
    {
        return $this->registrationTable;
    }
}
