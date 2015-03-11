<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityUserSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\BroadWorksMobilityPhoneToRing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's broadworks mobility service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'UserBroadWorksMobilityModifyRequest';
    protected $userId                    = null;
    protected $isActive                  = null;
    protected $phonesToRing              = null;
    protected $mobilePhoneNumber         = null;
    protected $alertClickToDialCalls     = null;
    protected $alertGroupPagingCalls     = null;
    protected $enableDiversionInhibitor  = null;
    protected $requireAnswerConfirmation = null;
    protected $broadworksCallControl     = null;
    protected $useSettingLevel           = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;

    public function __construct(
         $userId,
         $isActive = null,
         $phonesToRing = null,
         $mobilePhoneNumber = null,
         $alertClickToDialCalls = null,
         $alertGroupPagingCalls = null,
         $enableDiversionInhibitor = null,
         $requireAnswerConfirmation = null,
         $broadworksCallControl = null,
         $useSettingLevel = null,
         $denyCallOriginations = null,
         $denyCallTerminations = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setPhonesToRing($phonesToRing);
        $this->setMobilePhoneNumber($mobilePhoneNumber);
        $this->setAlertClickToDialCalls($alertClickToDialCalls);
        $this->setAlertGroupPagingCalls($alertGroupPagingCalls);
        $this->setEnableDiversionInhibitor($enableDiversionInhibitor);
        $this->setRequireAnswerConfirmation($requireAnswerConfirmation);
        $this->setBroadworksCallControl($broadworksCallControl);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setDenyCallOriginations($denyCallOriginations);
        $this->setDenyCallTerminations($denyCallTerminations);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setPhonesToRing($phonesToRing = null)
    {
        if (!$phonesToRing) return $this;
        $this->phonesToRing = ($phonesToRing InstanceOf BroadWorksMobilityPhoneToRing)
             ? $phonesToRing
             : new BroadWorksMobilityPhoneToRing($phonesToRing);
        $this->phonesToRing->setName('phonesToRing');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityPhoneToRing
     */
    public function getPhonesToRing()
    {
        return $this->phonesToRing->getValue();
    }

    /**
     * 
     */
    public function setMobilePhoneNumber($mobilePhoneNumber = null)
    {
        if (!$mobilePhoneNumber) return $this;
        $this->mobilePhoneNumber = ($mobilePhoneNumber InstanceOf DN)
             ? $mobilePhoneNumber
             : new DN($mobilePhoneNumber);
        $this->mobilePhoneNumber->setName('mobilePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAlertClickToDialCalls($alertClickToDialCalls = null)
    {
        if (!$alertClickToDialCalls) return $this;
        $this->alertClickToDialCalls = new PrimitiveType($alertClickToDialCalls);
        $this->alertClickToDialCalls->setName('alertClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertClickToDialCalls()
    {
        return $this->alertClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertGroupPagingCalls($alertGroupPagingCalls = null)
    {
        if (!$alertGroupPagingCalls) return $this;
        $this->alertGroupPagingCalls = new PrimitiveType($alertGroupPagingCalls);
        $this->alertGroupPagingCalls->setName('alertGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertGroupPagingCalls()
    {
        return $this->alertGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableDiversionInhibitor($enableDiversionInhibitor = null)
    {
        if (!$enableDiversionInhibitor) return $this;
        $this->enableDiversionInhibitor = new PrimitiveType($enableDiversionInhibitor);
        $this->enableDiversionInhibitor->setName('enableDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableDiversionInhibitor()
    {
        return $this->enableDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setRequireAnswerConfirmation($requireAnswerConfirmation = null)
    {
        if (!$requireAnswerConfirmation) return $this;
        $this->requireAnswerConfirmation = new PrimitiveType($requireAnswerConfirmation);
        $this->requireAnswerConfirmation->setName('requireAnswerConfirmation');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequireAnswerConfirmation()
    {
        return $this->requireAnswerConfirmation->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        if (!$broadworksCallControl) return $this;
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl->getValue();
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        if (!$useSettingLevel) return $this;
        $this->useSettingLevel = ($useSettingLevel InstanceOf BroadWorksMobilityUserSettingLevel)
             ? $useSettingLevel
             : new BroadWorksMobilityUserSettingLevel($useSettingLevel);
        $this->useSettingLevel->setName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobilityUserSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel->getValue();
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        if (!$denyCallOriginations) return $this;
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations->getValue();
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        if (!$denyCallTerminations) return $this;
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations->getValue();
    }
}
