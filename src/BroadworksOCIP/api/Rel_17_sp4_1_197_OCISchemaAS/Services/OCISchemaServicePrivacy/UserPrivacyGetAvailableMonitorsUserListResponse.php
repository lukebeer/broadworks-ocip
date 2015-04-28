<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserPrivacyGetAvailableMonitorsUserListRequest.
 *         Returns a 5 column table with column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name",
 *         "Hiragana First Name".
 */
class UserPrivacyGetAvailableMonitorsUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPrivacyGetAvailableMonitorsUserListResponse';
    protected $availableMonitorsTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy\UserPrivacyGetAvailableMonitorsUserListResponse $response
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
        $this->availableMonitorsTable->setElementName('availableMonitorsTable');
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
