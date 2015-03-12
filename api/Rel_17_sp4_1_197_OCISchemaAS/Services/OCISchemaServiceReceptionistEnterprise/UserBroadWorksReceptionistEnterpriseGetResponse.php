<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceReceptionistEnterprise; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserBroadWorksReceptionistEnterpriseGetRequest.
 *         Returns a 10 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address".
 */
class UserBroadWorksReceptionistEnterpriseGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserBroadWorksReceptionistEnterpriseGetResponse';
    protected $monitoredUserTable = null;

    /**
     * @return UserBroadWorksReceptionistEnterpriseGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        return $this->monitoredUserTable->getValue();
    }
}
