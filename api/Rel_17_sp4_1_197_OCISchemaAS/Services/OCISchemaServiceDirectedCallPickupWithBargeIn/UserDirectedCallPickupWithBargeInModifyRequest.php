<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDirectedCallPickupWithBargeIn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserDirectedCallPickupWithBargeInModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = 'UserDirectedCallPickupWithBargeInModifyRequest';
    protected $userId                         = null;
    protected $enableBargeInWarningTone       = null;
    protected $enableAutomaticTargetSelection = null;

    public function __construct(
         $userId,
         $enableBargeInWarningTone = null,
         $enableAutomaticTargetSelection = null
    ) {
        $this->setUserId($userId);
        $this->setEnableBargeInWarningTone($enableBargeInWarningTone);
        $this->setEnableAutomaticTargetSelection($enableAutomaticTargetSelection);
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setEnableBargeInWarningTone($enableBargeInWarningTone = null)
    {
        if (!$enableBargeInWarningTone) return $this;
        $this->enableBargeInWarningTone = new PrimitiveType($enableBargeInWarningTone);
        $this->enableBargeInWarningTone->setName('enableBargeInWarningTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBargeInWarningTone
     */
    public function getEnableBargeInWarningTone()
    {
        return $this->enableBargeInWarningTone->getValue();
    }

    /**
     * 
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection = null)
    {
        if (!$enableAutomaticTargetSelection) return $this;
        $this->enableAutomaticTargetSelection = new PrimitiveType($enableAutomaticTargetSelection);
        $this->enableAutomaticTargetSelection->setName('enableAutomaticTargetSelection');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticTargetSelection
     */
    public function getEnableAutomaticTargetSelection()
    {
        return $this->enableAutomaticTargetSelection->getValue();
    }
}
