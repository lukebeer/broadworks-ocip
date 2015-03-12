<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The bridge Id and the administrators/delegator of the bridge.
 *         The ownerTable has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class InstantConferencingBridgeOwnerList extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList';
    public    $name                = 'InstantConferencingBridgeOwnerList';
    protected $bridgeServiceUserId = null;
    protected $bridgeName          = null;
    protected $userTable           = null;

    public function __construct(
         $bridgeServiceUserId,
         $bridgeName,
         $userTable
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setBridgeName($bridgeName);
        $this->setUserTable($userTable);
    }

    /**
     * @return InstantConferencingBridgeOwnerList
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        if (!$bridgeServiceUserId) return $this;
        $this->bridgeServiceUserId = new SimpleContent($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setBridgeName($bridgeName = null)
    {
        if (!$bridgeName) return $this;
        $this->bridgeName = new SimpleContent($bridgeName);
        $this->bridgeName->setName('bridgeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBridgeName()
    {
        return $this->bridgeName->getValue();
    }

    /**
     * 
     */
    public function setUserTable($userTable = null)
    {
        if (!$userTable) return $this;
        $this->userTable = new SimpleContent($userTable);
        $this->userTable->setName('userTable');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserTable()
    {
        return $this->userTable;
    }
}
