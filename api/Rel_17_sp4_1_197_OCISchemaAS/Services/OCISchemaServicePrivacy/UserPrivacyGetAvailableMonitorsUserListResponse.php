<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserPrivacyGetAvailableMonitorsUserListRequest.
 *         Returns a 5 column table with column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name".
 */
class UserPrivacyGetAvailableMonitorsUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserPrivacyGetAvailableMonitorsUserListResponse';
    protected $availableMonitorsTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy\UserPrivacyGetAvailableMonitorsUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableMonitorsTable(TableType $availableMonitorsTable = null)
    {
        $this->availableMonitorsTable = $availableMonitorsTable;
        $this->availableMonitorsTable->setName('availableMonitorsTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAvailableMonitorsTable()
    {
        return $this->availableMonitorsTable;
    }
}
