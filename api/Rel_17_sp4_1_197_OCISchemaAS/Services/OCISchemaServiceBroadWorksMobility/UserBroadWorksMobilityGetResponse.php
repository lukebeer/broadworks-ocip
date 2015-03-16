<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityUserSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityPhoneToRing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a UserBroadWorksMobilityGetRequest.
 */
class UserBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksMobilityGetResponse';
    protected $isActive;
    protected $phonesToRing;
    protected $mobilePhoneNumber;
    protected $alertClickToDialCalls;
    protected $alertGroupPagingCalls;
    protected $enableDiversionInhibitor;
    protected $requireAnswerConfirmation;
    protected $broadworksCallControl;
    protected $useSettingLevel;
    protected $denyCallOriginations;
    protected $denyCallTerminations;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\UserBroadWorksMobilityGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhonesToRing($phonesToRing = null)
    {
        $this->phonesToRing = ($phonesToRing InstanceOf BroadWorksMobilityPhoneToRing)
             ? $phonesToRing
             : new BroadWorksMobilityPhoneToRing($phonesToRing);
        $this->phonesToRing->setElementName('phonesToRing');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityPhoneToRing $phonesToRing
     */
    public function getPhonesToRing()
    {
        return ($this->phonesToRing)
            ? $this->phonesToRing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setElementName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $mobilePhoneNumber
     */
    public function getMobilePhoneNumber()
    {
        return ($this->mobilePhoneNumber)
            ? $this->mobilePhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls = null)
    {
        $this->alertClickToDialCalls = new PrimitiveType($alertClickToDialCalls);
        $this->alertClickToDialCalls->setElementName('alertClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertClickToDialCalls
     */
    public function getAlertClickToDialCalls()
    {
        return ($this->alertClickToDialCalls)
            ? $this->alertClickToDialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls = null)
    {
        $this->alertGroupPagingCalls = new PrimitiveType($alertGroupPagingCalls);
        $this->alertGroupPagingCalls->setElementName('alertGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertGroupPagingCalls
     */
    public function getAlertGroupPagingCalls()
    {
        return ($this->alertGroupPagingCalls)
            ? $this->alertGroupPagingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor = null)
    {
        $this->enableDiversionInhibitor = new PrimitiveType($enableDiversionInhibitor);
        $this->enableDiversionInhibitor->setElementName('enableDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDiversionInhibitor
     */
    public function getEnableDiversionInhibitor()
    {
        return ($this->enableDiversionInhibitor)
            ? $this->enableDiversionInhibitor->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation = null)
    {
        $this->requireAnswerConfirmation = new PrimitiveType($requireAnswerConfirmation);
        $this->requireAnswerConfirmation->setElementName('requireAnswerConfirmation');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAnswerConfirmation
     */
    public function getRequireAnswerConfirmation()
    {
        return ($this->requireAnswerConfirmation)
            ? $this->requireAnswerConfirmation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setElementName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return boolean $broadworksCallControl
     */
    public function getBroadworksCallControl()
    {
        return ($this->broadworksCallControl)
            ? $this->broadworksCallControl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityUserSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityUserSettingLevel($useSettingLevel);
        $this->useSettingLevel->setElementName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityUserSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return ($this->useSettingLevel)
            ? $this->useSettingLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setElementName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return ($this->denyCallOriginations)
            ? $this->denyCallOriginations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setElementName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return ($this->denyCallTerminations)
            ? $this->denyCallTerminations->getElementValue()
            : null;
    }
}
