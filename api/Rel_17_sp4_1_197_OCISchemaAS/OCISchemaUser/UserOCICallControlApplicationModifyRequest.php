<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\ReplacementOCICallControlApplicationIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify which OCI Call Control Applications are enabled on a user
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserOCICallControlApplicationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserOCICallControlApplicationModifyRequest';
    protected $userId;
    protected $applicationIdList;

    public function __construct(
         $userId = '',
         ReplacementOCICallControlApplicationIdList $applicationIdList = null
    ) {
        $this->setUserId($userId);
        $this->setApplicationIdList($applicationIdList);
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
    public function setApplicationIdList(ReplacementOCICallControlApplicationIdList $applicationIdList = null)
    {
        $this->applicationIdList = ($applicationIdList InstanceOf ReplacementOCICallControlApplicationIdList)
             ? $applicationIdList
             : new ReplacementOCICallControlApplicationIdList($applicationIdList);
        $this->applicationIdList->setName('applicationIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOCICallControlApplicationIdList $applicationIdList
     */
    public function getApplicationIdList()
    {
        return $this->applicationIdList;
    }
}
