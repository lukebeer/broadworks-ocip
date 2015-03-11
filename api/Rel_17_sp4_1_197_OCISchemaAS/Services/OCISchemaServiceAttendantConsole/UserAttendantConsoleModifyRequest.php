<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleReplacementDisplayColumnList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify user's attendant console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserAttendantConsoleModifyRequest';
    protected $userId                     = null;
    protected $launchOnLogin              = null;
    protected $allowUserConfigCallDetails = null;
    protected $allowUserViewCallDetails   = null;
    protected $displayColumnList          = null;
    protected $monitoredUserIdList        = null;

    public function __construct(
         $userId,
         $launchOnLogin = null,
         $allowUserConfigCallDetails = null,
         $allowUserViewCallDetails = null,
         AttendantConsoleReplacementDisplayColumnList $displayColumnList = null,
         ReplacementUserIdList $monitoredUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setLaunchOnLogin($launchOnLogin);
        $this->setAllowUserConfigCallDetails($allowUserConfigCallDetails);
        $this->setAllowUserViewCallDetails($allowUserViewCallDetails);
        $this->setDisplayColumnList($displayColumnList);
        $this->setMonitoredUserIdList($monitoredUserIdList);
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
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        if (!$launchOnLogin) return $this;
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin->getValue();
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        if (!$allowUserConfigCallDetails) return $this;
        $this->allowUserConfigCallDetails = new PrimitiveType($allowUserConfigCallDetails);
        $this->allowUserConfigCallDetails->setName('allowUserConfigCallDetails');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowUserConfigCallDetails()
    {
        return $this->allowUserConfigCallDetails->getValue();
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        if (!$allowUserViewCallDetails) return $this;
        $this->allowUserViewCallDetails = new PrimitiveType($allowUserViewCallDetails);
        $this->allowUserViewCallDetails->setName('allowUserViewCallDetails');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowUserViewCallDetails()
    {
        return $this->allowUserViewCallDetails->getValue();
    }

    /**
     * 
     */
    public function setDisplayColumnList(AttendantConsoleReplacementDisplayColumnList $displayColumnList = null)
    {
        if (!$displayColumnList) return $this;
        $this->displayColumnList = $displayColumnList;
        $this->displayColumnList->setName('displayColumnList');
        return $this;
    }

    /**
     * 
     * @return AttendantConsoleReplacementDisplayColumnList
     */
    public function getDisplayColumnList()
    {
        return $this->displayColumnList;
    }

    /**
     * 
     */
    public function setMonitoredUserIdList(ReplacementUserIdList $monitoredUserIdList = null)
    {
        if (!$monitoredUserIdList) return $this;
        $this->monitoredUserIdList = $monitoredUserIdList;
        $this->monitoredUserIdList->setName('monitoredUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }
}
