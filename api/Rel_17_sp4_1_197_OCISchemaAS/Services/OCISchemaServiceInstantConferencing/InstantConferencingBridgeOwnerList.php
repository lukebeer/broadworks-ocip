<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
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
    public    $elementName = 'InstantConferencingBridgeOwnerList';
    protected $bridgeServiceUserId;
    protected $bridgeName;
    protected $userTable;

    public function __construct(
         $bridgeServiceUserId = '',
         $bridgeName = '',
         $userTable = ''
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setBridgeName($bridgeName);
        $this->setUserTable($userTable);
    }

    /**
     * @return mixed $response
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
        $this->bridgeServiceUserId = new SimpleContent($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId)
            ? $this->bridgeServiceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeName($bridgeName = null)
    {
        $this->bridgeName = new SimpleContent($bridgeName);
        $this->bridgeName->setElementName('bridgeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $bridgeName
     */
    public function getBridgeName()
    {
        return ($this->bridgeName)
            ? $this->bridgeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserTable($userTable = null)
    {
        $this->userTable = new SimpleContent($userTable);
        $this->userTable->setElementName('userTable');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userTable
     */
    public function getUserTable()
    {
        return $this->userTable;
    }
}
