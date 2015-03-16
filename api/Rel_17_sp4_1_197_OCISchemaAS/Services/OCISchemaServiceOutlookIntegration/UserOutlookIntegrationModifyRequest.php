<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration\OutlookIntegrationContactRetrievalSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Outlook Integration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutlookIntegrationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserOutlookIntegrationModifyRequest';
    protected $userId;
    protected $isActive;
    protected $contactRetrievalSelection;

    public function __construct(
         $userId = '',
         $isActive = null,
         $contactRetrievalSelection = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setContactRetrievalSelection($contactRetrievalSelection);
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setContactRetrievalSelection($contactRetrievalSelection = null)
    {
        $this->contactRetrievalSelection = ($contactRetrievalSelection InstanceOf OutlookIntegrationContactRetrievalSelection)
             ? $contactRetrievalSelection
             : new OutlookIntegrationContactRetrievalSelection($contactRetrievalSelection);
        $this->contactRetrievalSelection->setName('contactRetrievalSelection');
        return $this;
    }

    /**
     * 
     * @return OutlookIntegrationContactRetrievalSelection $contactRetrievalSelection
     */
    public function getContactRetrievalSelection()
    {
        return ($this->contactRetrievalSelection) ? $this->contactRetrievalSelection->getValue() : null;
    }
}
