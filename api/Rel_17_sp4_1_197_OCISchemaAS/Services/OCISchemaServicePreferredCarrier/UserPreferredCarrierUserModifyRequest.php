<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierNameModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPreferredCarrierUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserPreferredCarrierUserModifyRequest';
    protected $userId               = null;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    public function __construct(
         $userId,
         UserPreferredCarrierNameModify $intraLataCarrier = null,
         UserPreferredCarrierNameModify $interLataCarrier = null,
         UserPreferredCarrierNameModify $internationalCarrier = null
    ) {
        $this->setUserId($userId);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
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
    public function setIntraLataCarrier(UserPreferredCarrierNameModify $intraLataCarrier = null)
    {
        if (!$intraLataCarrier) return $this;
        $this->intraLataCarrier = $intraLataCarrier;
        $this->intraLataCarrier->setName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify
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
        if (!$interLataCarrier) return $this;
        $this->interLataCarrier = $interLataCarrier;
        $this->interLataCarrier->setName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify
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
        if (!$internationalCarrier) return $this;
        $this->internationalCarrier = $internationalCarrier;
        $this->internationalCarrier->setName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return UserPreferredCarrierNameModify
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }
}
