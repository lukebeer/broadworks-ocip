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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPolycomPhoneServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                          = __CLASS__;
    protected $userId                                        = null;
    protected $accessDevice                                  = null;
    protected $integratePhoneDirectoryWithBroadWorks         = null;
    protected $includeUserPersonalPhoneListInDirectory       = null;
    protected $includeGroupCustomContactDirectoryInDirectory = null;
    protected $groupCustomContactDirectory                   = null;

    public function __construct(
         $userId,
          $accessDevice,
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

    /**
     * @return UserPolycomPhoneServicesModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        $this->accessDevice =  $accessDevice;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->getValue();
    }

    /**
     * 
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks = null)
    {
        $this->integratePhoneDirectoryWithBroadWorks = (boolean) $integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * 
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return (!$this->integratePhoneDirectoryWithBroadWorks) ?: $this->integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * 
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory = null)
    {
        $this->includeUserPersonalPhoneListInDirectory = (boolean) $includeUserPersonalPhoneListInDirectory;
    }

    /**
     * 
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return (!$this->includeUserPersonalPhoneListInDirectory) ?: $this->includeUserPersonalPhoneListInDirectory;
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = (boolean) $includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * 
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * Custom Contact Directory name.
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->getValue();
    }
}
