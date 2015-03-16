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
    public    $name = 'UserAttendantConsoleModifyRequest';
    protected $userId;
    protected $launchOnLogin;
    protected $allowUserConfigCallDetails;
    protected $allowUserViewCallDetails;
    protected $displayColumnList;
    protected $monitoredUserIdList;

    public function __construct(
         $userId = '',
         $launchOnLogin = null,
         $allowUserConfigCallDetails = null,
         $allowUserViewCallDetails = null,
         $displayColumnList = null,
         $monitoredUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setLaunchOnLogin($launchOnLogin);
        $this->setAllowUserConfigCallDetails($allowUserConfigCallDetails);
        $this->setAllowUserViewCallDetails($allowUserViewCallDetails);
        $this->setDisplayColumnList($displayColumnList);
        $this->setMonitoredUserIdList($monitoredUserIdList);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $launchOnLogin
     */
    public function getLaunchOnLogin()
    {
        return ($this->launchOnLogin) ? $this->launchOnLogin->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        $this->allowUserConfigCallDetails = new PrimitiveType($allowUserConfigCallDetails);
        $this->allowUserConfigCallDetails->setName('allowUserConfigCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserConfigCallDetails
     */
    public function getAllowUserConfigCallDetails()
    {
        return ($this->allowUserConfigCallDetails) ? $this->allowUserConfigCallDetails->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        $this->allowUserViewCallDetails = new PrimitiveType($allowUserViewCallDetails);
        $this->allowUserViewCallDetails->setName('allowUserViewCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserViewCallDetails
     */
    public function getAllowUserViewCallDetails()
    {
        return ($this->allowUserViewCallDetails) ? $this->allowUserViewCallDetails->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayColumnList(AttendantConsoleReplacementDisplayColumnList $displayColumnList = null)
    {
        $this->displayColumnList = ($displayColumnList InstanceOf AttendantConsoleReplacementDisplayColumnList)
             ? $displayColumnList
             : new AttendantConsoleReplacementDisplayColumnList($displayColumnList);
        $this->displayColumnList->setName('displayColumnList');
        return $this;
    }

    /**
     * 
     * @return AttendantConsoleReplacementDisplayColumnList $displayColumnList
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
        $this->monitoredUserIdList = ($monitoredUserIdList InstanceOf ReplacementUserIdList)
             ? $monitoredUserIdList
             : new ReplacementUserIdList($monitoredUserIdList);
        $this->monitoredUserIdList->setName('monitoredUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $monitoredUserIdList
     */
    public function getMonitoredUserIdList()
    {
        return $this->monitoredUserIdList;
    }
}
