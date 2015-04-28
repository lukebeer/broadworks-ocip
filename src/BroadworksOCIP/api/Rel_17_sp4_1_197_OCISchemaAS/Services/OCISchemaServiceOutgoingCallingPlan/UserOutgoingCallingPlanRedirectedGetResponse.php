<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanRedirectedPermissions;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserOutgoingCallingPlanRedirectedGetRequest.
 */
class UserOutgoingCallingPlanRedirectedGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanRedirectedGetResponse';
    protected $useCustomSettings;
    protected $userPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanRedirectedGetResponse $response
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
    public function setUserPermissions(OutgoingCallingPlanRedirectedPermissions $userPermissions = null)
    {
        $this->userPermissions = ($userPermissions InstanceOf OutgoingCallingPlanRedirectedPermissions)
             ? $userPermissions
             : new OutgoingCallingPlanRedirectedPermissions($userPermissions);
        $this->userPermissions->setElementName('userPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanRedirectedPermissions $userPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
