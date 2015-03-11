<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PublicUserIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IMSUserState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the Sh Interface non-transparent data associated with a Public User Identity.
 *         The response is a SuccessResponse or ErrorResponse.
 */
class UserShInterfaceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserShInterfaceModifyRequest';
    protected $publicUserIdentity = null;
    protected $SCSCFName          = null;
    protected $IMSUserState       = null;

    public function __construct(
         PublicUserIdentity $publicUserIdentity,
         $SCSCFName = null,
         $IMSUserState = null
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
        if (!$publicUserIdentity) return $this;
        $this->publicUserIdentity = $publicUserIdentity;
        $this->publicUserIdentity->setName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return PublicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        if (!$SCSCFName) return $this;
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
        $this->SCSCFName->setName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SIPURI
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
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
        $this->IMSUserState->setName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return IMSUserState
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState->getValue();
    }
}
