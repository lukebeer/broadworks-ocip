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
    public    $name               = __CLASS__;
    protected $publicUserIdentity = null;
    protected $SCSCFName          = null;
    protected $IMSUserState       = null;

    public function __construct(
          $publicUserIdentity,
         $SCSCFName = null,
         $IMSUserState = null
    ) {
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
    }

    /**
     * Public User Identity
     */
    public function setPublicUserIdentity(PublicUserIdentity $publicUserIdentity = null)
    {
        $this->publicUserIdentity =  $publicUserIdentity;
    }

    /**
     * Public User Identity
     */
    public function getPublicUserIdentity()
    {
        return (!$this->publicUserIdentity) ?: $this->publicUserIdentity->getValue();
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = ($SCSCFName InstanceOf SIPURI)
             ? $SCSCFName
             : new SIPURI($SCSCFName);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getSCSCFName()
    {
        return (!$this->SCSCFName) ?: $this->SCSCFName->getValue();
    }

    /**
     * IMS User State per the 3GPP TS 29.328 V6.3.0 spec.
     */
    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = ($IMSUserState InstanceOf IMSUserState)
             ? $IMSUserState
             : new IMSUserState($IMSUserState);
    }

    /**
     * IMS User State per the 3GPP TS 29.328 V6.3.0 spec.
     */
    public function getIMSUserState()
    {
        return (!$this->IMSUserState) ?: $this->IMSUserState->getValue();
    }
}
