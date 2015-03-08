<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationSIPURIFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationUserIdFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $trunkGroupKey     = null;
    protected $taskName          = null;
    protected $userIdFormat      = null;
    protected $userIdDomain      = null;
    protected $populateExtension = null;
    protected $linePortFormat    = null;
    protected $linePortDomain    = null;
    protected $populateContact   = null;
    protected $contactFormat     = null;
    protected $contactDomain     = null;
    protected $servicePackName   = null;
    protected $userService       = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey,
         $taskName,
         $userIdFormat,
         $userIdDomain,
         $populateExtension,
         $linePortFormat,
         $linePortDomain,
         $populateContact,
         $contactFormat = null,
         $contactDomain = null,
         $servicePackName = null,
         $userService = null
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setTaskName($taskName);
        $this->setUserIdFormat($userIdFormat);
        $this->setUserIdDomain($userIdDomain);
        $this->setPopulateExtension($populateExtension);
        $this->setLinePortFormat($linePortFormat);
        $this->setLinePortDomain($linePortDomain);
        $this->setPopulateContact($populateContact);
        $this->setContactFormat($contactFormat);
        $this->setContactDomain($contactDomain);
        $this->setServicePackName($servicePackName);
        $this->setUserService($userService);
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        $this->trunkGroupKey = TrunkGroupKey $trunkGroupKey;
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->getValue();
    }

    /**
     * The name of a Trunk Group User Creation Task.
     */
    public function setTaskName($taskName = null)
    {
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
    }

    /**
     * The name of a Trunk Group User Creation Task.
     */
    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->getValue();
    }

    /**
     * User Id format for Trunk Group User Creation.
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
    }

    /**
     * User Id format for Trunk Group User Creation.
     */
    public function getUserIdFormat()
    {
        return (!$this->userIdFormat) ?: $this->userIdFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getUserIdDomain()
    {
        return (!$this->userIdDomain) ?: $this->userIdDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        $this->populateExtension = (boolean) $populateExtension;
    }

    /**
     * 
     */
    public function getPopulateExtension()
    {
        return (!$this->populateExtension) ?: $this->populateExtension->getValue();
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function getLinePortFormat()
    {
        return (!$this->linePortFormat) ?: $this->linePortFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getLinePortDomain()
    {
        return (!$this->linePortDomain) ?: $this->linePortDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        $this->populateContact = (boolean) $populateContact;
    }

    /**
     * 
     */
    public function getPopulateContact()
    {
        return (!$this->populateContact) ?: $this->populateContact->getValue();
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
    }

    /**
     * SIP URI format for Trunk Group User Creation.
     */
    public function getContactFormat()
    {
        return (!$this->contactFormat) ?: $this->contactFormat->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getContactDomain()
    {
        return (!$this->contactDomain) ?: $this->contactDomain->getValue();
    }

    /**
     * Service Pack name.
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->getValue();
    }

    /**
     * User level services.
     */
    public function setUserService($userService = null)
    {
        $this->userService = ($userService InstanceOf UserService)
             ? $userService
             : new UserService($userService);
    }

    /**
     * User level services.
     */
    public function getUserService()
    {
        return (!$this->userService) ?: $this->userService->getValue();
    }
}