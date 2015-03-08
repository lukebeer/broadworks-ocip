<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutlookIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration\OutlookIntegrationContactRetrievalSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserOutlookIntegrationGetRequest.
 */
class UserOutlookIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutlookIntegration\UserOutlookIntegrationGetResponse';
    public    $name                      = __CLASS__;
    protected $isActive                  = null;
    protected $contactRetrievalSelection = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Microsoft Outlook contact database search option.
     *         Controls which contacts are retrieved from outlook.
     */
    public function setContactRetrievalSelection($contactRetrievalSelection = null)
    {
        $this->contactRetrievalSelection = ($contactRetrievalSelection InstanceOf OutlookIntegrationContactRetrievalSelection)
             ? $contactRetrievalSelection
             : new OutlookIntegrationContactRetrievalSelection($contactRetrievalSelection);
    }

    /**
     * Microsoft Outlook contact database search option.
     *         Controls which contacts are retrieved from outlook.
     */
    public function getContactRetrievalSelection()
    {
        return (!$this->contactRetrievalSelection) ?: $this->contactRetrievalSelection->getValue();
    }
}
