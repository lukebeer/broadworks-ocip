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
    public    $name                       = __CLASS__;
    protected $isActive                   = null;
    protected $contactRetrievalSelection  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setContactRetrievalSelection($contactRetrievalSelection = null)
    {
        $this->contactRetrievalSelection = ($contactRetrievalSelection InstanceOf OutlookIntegrationContactRetrievalSelection)
             ? $contactRetrievalSelection
             : new OutlookIntegrationContactRetrievalSelection($contactRetrievalSelection);
    }

    public function getContactRetrievalSelection()
    {
        return (!$this->contactRetrievalSelection) ?: $this->contactRetrievalSelection->value();
    }
}
