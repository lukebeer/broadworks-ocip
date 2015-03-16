<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the user-level settings for the BroadWorks Anywhere service for a specified user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserBroadWorksAnywhereModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksAnywhereModifyRequest';
    protected $userId;
    protected $alertAllLocationsForClickToDialCalls;
    protected $alertAllLocationsForGroupPagingCalls;

    public function __construct(
         $userId = '',
         $alertAllLocationsForClickToDialCalls = null,
         $alertAllLocationsForGroupPagingCalls = null
    ) {
        $this->setUserId($userId);
        $this->setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls);
        $this->setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls);
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls = null)
    {
        $this->alertAllLocationsForClickToDialCalls = new PrimitiveType($alertAllLocationsForClickToDialCalls);
        $this->alertAllLocationsForClickToDialCalls->setElementName('alertAllLocationsForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllLocationsForClickToDialCalls
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return ($this->alertAllLocationsForClickToDialCalls)
            ? $this->alertAllLocationsForClickToDialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls = null)
    {
        $this->alertAllLocationsForGroupPagingCalls = new PrimitiveType($alertAllLocationsForGroupPagingCalls);
        $this->alertAllLocationsForGroupPagingCalls->setElementName('alertAllLocationsForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllLocationsForGroupPagingCalls
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return ($this->alertAllLocationsForGroupPagingCalls)
            ? $this->alertAllLocationsForGroupPagingCalls->getElementValue()
            : null;
    }
}
