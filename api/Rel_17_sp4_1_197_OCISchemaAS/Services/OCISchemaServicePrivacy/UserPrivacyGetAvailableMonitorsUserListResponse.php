<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy\UserPrivacyGetAvailableMonitorsUserListResponse;
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
    public    $name                   = __CLASS__;
    protected $availableMonitorsTable = null;

    /**
     * @return UserPrivacyGetAvailableMonitorsUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableMonitorsTable(core:OCITable $availableMonitorsTable = null)
    {
        $this->availableMonitorsTable =  $availableMonitorsTable;
    }

    /**
     * 
     */
    public function getAvailableMonitorsTable()
    {
        return (!$this->availableMonitorsTable) ?: $this->availableMonitorsTable->getValue();
    }
}
