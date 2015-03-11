<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDigitCollectionSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the group's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDigitCollectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupDigitCollectionModifyRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $useSetting        = null;
    protected $accessCode        = null;
    protected $publicDigitMap    = null;
    protected $privateDigitMap   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useSetting = null,
         $accessCode = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseSetting($useSetting);
        $this->setAccessCode($accessCode);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setUseSetting($useSetting = null)
    {
        if (!$useSetting) return $this;
        $this->useSetting = ($useSetting InstanceOf GroupDigitCollectionSettingLevel)
             ? $useSetting
             : new GroupDigitCollectionSettingLevel($useSetting);
        $this->useSetting->setName('useSetting');
        return $this;
    }

    /**
     * 
     * @return GroupDigitCollectionSettingLevel
     */
    public function getUseSetting()
    {
        return $this->useSetting->getValue();
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        if (!$accessCode) return $this;
        $this->accessCode = ($accessCode InstanceOf AccessCode)
             ? $accessCode
             : new AccessCode($accessCode);
        $this->accessCode->setName('accessCode');
        return $this;
    }

    /**
     * 
     * @return AccessCode
     */
    public function getAccessCode()
    {
        return $this->accessCode->getValue();
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if (!$publicDigitMap) return $this;
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap->getValue();
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if (!$privateDigitMap) return $this;
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap->getValue();
    }
}
