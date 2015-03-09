<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAccountAuthorizationCodes\GroupAccountAuthorizationCodesGetAvailableUserListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupAccountAuthorizationCodesGetAvailableUserListRequest.
 *         The column headings are: "User Id", "Last Name", "First Name", "Hiragana Last Name" and
 *         "Hiragana First Name".
 */
class GroupAccountAuthorizationCodesGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $userTable = null;

    /**
     * @return GroupAccountAuthorizationCodesGetAvailableUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserTable(core:OCITable $userTable = null)
    {
        $this->userTable =  $userTable;
    }

    /**
     * 
     */
    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->getValue();
    }
}
