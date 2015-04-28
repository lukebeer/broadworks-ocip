<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierNameModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPreferredCarrierUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPreferredCarrierUserModifyRequest';
    protected $userId;
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

    public function __construct(
         $userId = '',
         $intraLataCarrier = null,
         $interLataCarrier = null,
         $internationalCarrier = null
    ) {
        $this->setUserId($userId);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
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
    public function setIntraLataCarrier(UserPreferredCarrierNameModify $intraLataCarrier = null)
    {
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf UserPreferredCarrierNameModify)
             ? $intraLataCarrier
             : new UserPreferredCarrierNameModify($intraLataCarrier);
        $this->intraLataCarrier->setElementName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * 
     */
    public function setInterLataCarrier(UserPreferredCarrierNameModify $interLataCarrier = null)
    {
        $this->interLataCarrier = ($interLataCarrier InstanceOf UserPreferredCarrierNameModify)
             ? $interLataCarrier
             : new UserPreferredCarrierNameModify($interLataCarrier);
        $this->interLataCarrier->setElementName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * 
     */
    public function setInternationalCarrier(UserPreferredCarrierNameModify $internationalCarrier = null)
    {
        $this->internationalCarrier = ($internationalCarrier InstanceOf UserPreferredCarrierNameModify)
             ? $internationalCarrier
             : new UserPreferredCarrierNameModify($internationalCarrier);
        $this->internationalCarrier->setElementName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }
}
