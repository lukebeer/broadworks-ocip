<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemGetRegistrationContactListRequest. The table columns are: Service Provider Id, Group Id, User Id, Line/Port, Endpoint Type, Order, URI, Expiration, Contact, Device Level, Device Name.
 */
class SystemGetRegistrationContactListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemGetRegistrationContactListResponse';
    protected $registrationTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemGetRegistrationContactListResponse $response
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
