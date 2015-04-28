<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDirectedCallPickupWithBargeIn; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserDirectedCallPickupWithBargeInModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDirectedCallPickupWithBargeInModifyRequest';
    protected $userId;
    protected $enableBargeInWarningTone;
    protected $enableAutomaticTargetSelection;

    public function __construct(
         $userId = '',
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
    public function setEnableBargeInWarningTone($enableBargeInWarningTone = null)
    {
        $this->enableBargeInWarningTone = new PrimitiveType($enableBargeInWarningTone);
        $this->enableBargeInWarningTone->setElementName('enableBargeInWarningTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBargeInWarningTone
     */
    public function getEnableBargeInWarningTone()
    {
        return ($this->enableBargeInWarningTone)
            ? $this->enableBargeInWarningTone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection = null)
    {
        $this->enableAutomaticTargetSelection = new PrimitiveType($enableAutomaticTargetSelection);
        $this->enableAutomaticTargetSelection->setElementName('enableAutomaticTargetSelection');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticTargetSelection
     */
    public function getEnableAutomaticTargetSelection()
    {
        return ($this->enableAutomaticTargetSelection)
            ? $this->enableAutomaticTargetSelection->getElementValue()
            : null;
    }
}
