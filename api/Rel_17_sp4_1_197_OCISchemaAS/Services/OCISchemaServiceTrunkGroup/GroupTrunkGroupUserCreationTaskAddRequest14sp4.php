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
    public    $name = 'GroupTrunkGroupUserCreationTaskAddRequest14sp4';
    protected $trunkGroupKey;
    protected $taskName;
    protected $userIdFormat;
    protected $userIdDomain;
    protected $populateExtension;
    protected $linePortFormat;
    protected $linePortDomain;
    protected $populateContact;
    protected $contactFormat;
    protected $contactDomain;
    protected $servicePackName;
    protected $userService;

    public function __construct(
         $trunkGroupKey = '',
         $taskName = '',
         $userIdFormat = '',
         $userIdDomain = '',
         $populateExtension = '',
         $linePortFormat = '',
         $linePortDomain = '',
         $populateContact = '',
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
     * @return mixed $response
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
        $this->trunkGroupKey = ($trunkGroupKey InstanceOf TrunkGroupKey)
             ? $trunkGroupKey
             : new TrunkGroupKey($trunkGroupKey);
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $trunkGroupKey
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
        $this->taskName = ($taskName InstanceOf TrunkGroupUserCreationTaskName)
             ? $taskName
             : new TrunkGroupUserCreationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName) ? $this->taskName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
        $this->userIdFormat->setName('userIdFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationUserIdFormat $userIdFormat
     */
    public function getUserIdFormat()
    {
        return ($this->userIdFormat) ? $this->userIdFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
        $this->userIdDomain->setName('userIdDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userIdDomain
     */
    public function getUserIdDomain()
    {
        return ($this->userIdDomain) ? $this->userIdDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        $this->populateExtension = new PrimitiveType($populateExtension);
        $this->populateExtension->setName('populateExtension');
        return $this;
    }

    /**
     * 
     * @return boolean $populateExtension
     */
    public function getPopulateExtension()
    {
        return ($this->populateExtension) ? $this->populateExtension->getValue() : null;
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
        $this->linePortFormat->setName('linePortFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $linePortFormat
     */
    public function getLinePortFormat()
    {
        return ($this->linePortFormat) ? $this->linePortFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
        $this->linePortDomain->setName('linePortDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $linePortDomain
     */
    public function getLinePortDomain()
    {
        return ($this->linePortDomain) ? $this->linePortDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        $this->populateContact = new PrimitiveType($populateContact);
        $this->populateContact->setName('populateContact');
        return $this;
    }

    /**
     * 
     * @return boolean $populateContact
     */
    public function getPopulateContact()
    {
        return ($this->populateContact) ? $this->populateContact->getValue() : null;
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
        $this->contactFormat->setName('contactFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $contactFormat
     */
    public function getContactFormat()
    {
        return ($this->contactFormat) ? $this->contactFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
        $this->contactDomain->setName('contactDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $contactDomain
     */
    public function getContactDomain()
    {
        return ($this->contactDomain) ? $this->contactDomain->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName) ? $this->servicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setUserService($userService = null)
    {
        $this->userService = ($userService InstanceOf UserService)
             ? $userService
             : new UserService($userService);
        $this->userService->setName('userService');
        return $this;
    }

    /**
     * 
     * @return UserService $userService
     */
    public function getUserService()
    {
        return ($this->userService) ? $this->userService->getValue() : null;
    }
}
