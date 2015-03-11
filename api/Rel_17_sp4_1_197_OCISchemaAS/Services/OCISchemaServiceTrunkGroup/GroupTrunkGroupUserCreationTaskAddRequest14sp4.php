<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationSIPURIFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationUserIdFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupTrunkGroupUserCreationTaskAddRequest14sp4';
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        if (!$trunkGroupKey) return $this;
        $this->trunkGroupKey = $trunkGroupKey;
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * 
     */
    public function setTaskName($taskName = null)
    {
        if (!$taskName) return $this;
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskName
     */
    public function getTaskName()
    {
        return $this->taskName->getValue();
    }

    /**
     * 
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        if (!$userIdFormat) return $this;
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
        $this->userIdFormat->setName('userIdFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationUserIdFormat
     */
    public function getUserIdFormat()
    {
        return $this->userIdFormat->getValue();
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        if (!$userIdDomain) return $this;
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
        $this->userIdDomain->setName('userIdDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getUserIdDomain()
    {
        return $this->userIdDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        if (!$populateExtension) return $this;
        $this->populateExtension = new PrimitiveType($populateExtension);
        $this->populateExtension->setName('populateExtension');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPopulateExtension()
    {
        return $this->populateExtension->getValue();
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        if (!$linePortFormat) return $this;
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
        $this->linePortFormat->setName('linePortFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat
     */
    public function getLinePortFormat()
    {
        return $this->linePortFormat->getValue();
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        if (!$linePortDomain) return $this;
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
        $this->linePortDomain->setName('linePortDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getLinePortDomain()
    {
        return $this->linePortDomain->getValue();
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        if (!$populateContact) return $this;
        $this->populateContact = new PrimitiveType($populateContact);
        $this->populateContact->setName('populateContact');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPopulateContact()
    {
        return $this->populateContact->getValue();
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
        if (!$contactFormat) return $this;
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
        $this->contactFormat->setName('contactFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat
     */
    public function getContactFormat()
    {
        return $this->contactFormat->getValue();
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
        if (!$contactDomain) return $this;
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
        $this->contactDomain->setName('contactDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getContactDomain()
    {
        return $this->contactDomain->getValue();
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        if (!$servicePackName) return $this;
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setUserService($userService = null)
    {
        if (!$userService) return $this;
        $this->userService = ($userService InstanceOf UserService)
             ? $userService
             : new UserService($userService);
        $this->userService->setName('userService');
        return $this;
    }

    /**
     * 
     * @return UserService
     */
    public function getUserService()
    {
        return $this->userService->getValue();
    }
}
