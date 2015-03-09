<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to   EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest.
 *         Contains a table with column headings : "Group Id", "Last Name", "First Name", "Phone Number", "Extension", 
 *         "Virtual On-Net Call Type" in a row for each user.
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $userTable = null;

    /**
     * @return EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
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
