<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallMeNowPermissions;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserOutgoingCallingPlanCallMeNowGetRequest.
 */
class UserOutgoingCallingPlanCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanCallMeNowGetResponse';
    protected $useCustomSettings;
    protected $userPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanCallMeNowGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = new PrimitiveType($useCustomSettings);
        $this->useCustomSettings->setElementName('useCustomSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomSettings
     */
    public function getUseCustomSettings()
    {
        return ($this->useCustomSettings)
            ? $this->useCustomSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserPermissions(OutgoingCallingPlanCallMeNowPermissions $userPermissions = null)
    {
        $this->userPermissions = ($userPermissions InstanceOf OutgoingCallingPlanCallMeNowPermissions)
             ? $userPermissions
             : new OutgoingCallingPlanCallMeNowPermissions($userPermissions);
        $this->userPermissions->setElementName('userPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanCallMeNowPermissions $userPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
