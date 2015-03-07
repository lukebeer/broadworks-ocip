<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPolycomPhoneServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $userId                                         = null;
    protected $accessDevice                                   = null;
    protected $integratePhoneDirectoryWithBroadWorks          = null;
    protected $includeUserPersonalPhoneListInDirectory        = null;
    protected $includeGroupCustomContactDirectoryInDirectory  = null;
    protected $groupCustomContactDirectory                    = null;

    public function __construct(
         $userId,
         AccessDevice $accessDevice,
         $integratePhoneDirectoryWithBroadWorks = null,
         $includeUserPersonalPhoneListInDirectory = null,
         $includeGroupCustomContactDirectoryInDirectory = null,
         $groupCustomContactDirectory = null
    ) {
        $this->setUserId($userId);
        $this->setAccessDevice($accessDevice);
        $this->setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks);
        $this->setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory);
        $this->setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory);
        $this->setGroupCustomContactDirectory($groupCustomContactDirectory);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }

    public function setIntegratePhoneDirectoryWithBroadWorks(xs:boolean $integratePhoneDirectoryWithBroadWorks = null)
    {
    }

    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return (!$this->integratePhoneDirectoryWithBroadWorks) ?: $this->integratePhoneDirectoryWithBroadWorks->value();
    }

    public function setIncludeUserPersonalPhoneListInDirectory(xs:boolean $includeUserPersonalPhoneListInDirectory = null)
    {
    }

    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return (!$this->includeUserPersonalPhoneListInDirectory) ?: $this->includeUserPersonalPhoneListInDirectory->value();
    }

    public function setIncludeGroupCustomContactDirectoryInDirectory(xs:boolean $includeGroupCustomContactDirectoryInDirectory = null)
    {
    }

    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory->value();
    }

    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->value();
    }
}
