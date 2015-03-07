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


/**
 * Modifies the Sh Interface non-transparent data associated with a Public User Identity.
 *         The response is a SuccessResponse or ErrorResponse.
 */
class UserShInterfaceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $publicUserIdentity  = null;
    protected $SCSCFName           = null;
    protected $IMSUserState        = null;

    public function __construct(
         PublicUserIdentity $publicUserIdentity,
         $SCSCFName = null,
         $IMSUserState = null
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
    }

    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
    }

    public function getPublicUserIdentity()
    {
        return (!$this->publicUserIdentity) ?: $this->publicUserIdentity->value();
    }

    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
    }

    public function getSCSCFName()
    {
        return (!$this->SCSCFName) ?: $this->SCSCFName->value();
    }

    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
    }

    public function getIMSUserState()
    {
        return (!$this->IMSUserState) ?: $this->IMSUserState->value();
    }
}
