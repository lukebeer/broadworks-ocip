<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\ShInterfaceUserListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * ShInterface User List Entry.
 */
class ShInterfaceUserListEntry extends ComplexType implements ComplexInterface
{
    public    $responseType       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\ShInterfaceUserListEntry';
    public    $name               = 'ShInterfaceUserListEntry';
    protected $userId             = null;
    protected $userType           = null;
    protected $publicUserIdentity = null;
    protected $endpointType       = null;
    protected $SCSCFName          = null;
    protected $IMSUserState       = null;

    public function __construct(
         $userId,
         $userType,
         $publicUserIdentity,
         $endpointType,
         $SCSCFName = null,
         $IMSUserState
    ) {
        $this->setUserId($userId);
        $this->setUserType($userType);
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setEndpointType($endpointType);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
    }

    /**
     * @return ShInterfaceUserListEntry
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = new SimpleContent($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUserType($userType = null)
    {
        if (!$userType) return $this;
        $this->userType = new SimpleContent($userType);
        $this->userType->setName('userType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUserType()
    {
        return $this->userType->getValue();
    }

    /**
     * 
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        if (!$publicUserIdentity) return $this;
        $this->publicUserIdentity = new SimpleContent($publicUserIdentity);
        $this->publicUserIdentity->setName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity->getValue();
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        if (!$endpointType) return $this;
        $this->endpointType = new SimpleContent($endpointType);
        $this->endpointType->setName('endpointType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEndpointType()
    {
        return $this->endpointType->getValue();
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        if (!$SCSCFName) return $this;
        $this->SCSCFName = new SimpleContent($SCSCFName);
        $this->SCSCFName->setName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName->getValue();
    }

    /**
     * 
     */
    public function setIMSUserState($IMSUserState = null)
    {
        if (!$IMSUserState) return $this;
        $this->IMSUserState = new SimpleContent($IMSUserState);
        $this->IMSUserState->setName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState->getValue();
    }
}
