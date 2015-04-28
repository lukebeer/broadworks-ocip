<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\IncomingCallingPlanPermissions;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserIncomingCallingPlanGetRequest.
 */
class UserIncomingCallingPlanGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserIncomingCallingPlanGetResponse';
    protected $useCustomSettings;
    protected $userPermissions;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIncomingCallingPlan\UserIncomingCallingPlanGetResponse $response
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
    public function setUserPermissions(IncomingCallingPlanPermissions $userPermissions = null)
    {
        $this->userPermissions = ($userPermissions InstanceOf IncomingCallingPlanPermissions)
             ? $userPermissions
             : new IncomingCallingPlanPermissions($userPermissions);
        $this->userPermissions->setElementName('userPermissions');
        return $this;
    }

    /**
     * 
     * @return IncomingCallingPlanPermissions $userPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
