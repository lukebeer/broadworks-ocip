<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationSIPURIFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationUserIdFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUserCreationTaskName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a user creation task for a trunk group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupTrunkGroupUserCreationTaskAddRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupUserCreationTaskAddRequest14sp4';
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
        $this->trunkGroupKey->setElementName('trunkGroupKey');
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
        $this->taskName->setElementName('taskName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationTaskName $taskName
     */
    public function getTaskName()
    {
        return ($this->taskName)
            ? $this->taskName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserIdFormat($userIdFormat = null)
    {
        $this->userIdFormat = ($userIdFormat InstanceOf TrunkGroupUserCreationUserIdFormat)
             ? $userIdFormat
             : new TrunkGroupUserCreationUserIdFormat($userIdFormat);
        $this->userIdFormat->setElementName('userIdFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationUserIdFormat $userIdFormat
     */
    public function getUserIdFormat()
    {
        return ($this->userIdFormat)
            ? $this->userIdFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserIdDomain($userIdDomain = null)
    {
        $this->userIdDomain = ($userIdDomain InstanceOf NetAddress)
             ? $userIdDomain
             : new NetAddress($userIdDomain);
        $this->userIdDomain->setElementName('userIdDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $userIdDomain
     */
    public function getUserIdDomain()
    {
        return ($this->userIdDomain)
            ? $this->userIdDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPopulateExtension($populateExtension = null)
    {
        $this->populateExtension = new PrimitiveType($populateExtension);
        $this->populateExtension->setElementName('populateExtension');
        return $this;
    }

    /**
     * 
     * @return boolean $populateExtension
     */
    public function getPopulateExtension()
    {
        return ($this->populateExtension)
            ? $this->populateExtension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePortFormat($linePortFormat = null)
    {
        $this->linePortFormat = ($linePortFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $linePortFormat
             : new TrunkGroupUserCreationSIPURIFormat($linePortFormat);
        $this->linePortFormat->setElementName('linePortFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $linePortFormat
     */
    public function getLinePortFormat()
    {
        return ($this->linePortFormat)
            ? $this->linePortFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePortDomain($linePortDomain = null)
    {
        $this->linePortDomain = ($linePortDomain InstanceOf NetAddress)
             ? $linePortDomain
             : new NetAddress($linePortDomain);
        $this->linePortDomain->setElementName('linePortDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $linePortDomain
     */
    public function getLinePortDomain()
    {
        return ($this->linePortDomain)
            ? $this->linePortDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPopulateContact($populateContact = null)
    {
        $this->populateContact = new PrimitiveType($populateContact);
        $this->populateContact->setElementName('populateContact');
        return $this;
    }

    /**
     * 
     * @return boolean $populateContact
     */
    public function getPopulateContact()
    {
        return ($this->populateContact)
            ? $this->populateContact->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactFormat($contactFormat = null)
    {
        $this->contactFormat = ($contactFormat InstanceOf TrunkGroupUserCreationSIPURIFormat)
             ? $contactFormat
             : new TrunkGroupUserCreationSIPURIFormat($contactFormat);
        $this->contactFormat->setElementName('contactFormat');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUserCreationSIPURIFormat $contactFormat
     */
    public function getContactFormat()
    {
        return ($this->contactFormat)
            ? $this->contactFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactDomain($contactDomain = null)
    {
        $this->contactDomain = ($contactDomain InstanceOf NetAddress)
             ? $contactDomain
             : new NetAddress($contactDomain);
        $this->contactDomain->setElementName('contactDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $contactDomain
     */
    public function getContactDomain()
    {
        return ($this->contactDomain)
            ? $this->contactDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserService($userService = null)
    {
        $this->userService = ($userService InstanceOf UserService)
             ? $userService
             : new UserService($userService);
        $this->userService->setElementName('userService');
        return $this;
    }

    /**
     * 
     * @return UserService $userService
     */
    public function getUserService()
    {
        return ($this->userService)
            ? $this->userService->getElementValue()
            : null;
    }
}
