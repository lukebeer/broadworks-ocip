<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration\OutlookIntegrationContactRetrievalSelection;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserOutlookIntegrationGetRequest.
 */
class UserOutlookIntegrationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutlookIntegrationGetResponse';
    protected $isActive;
    protected $contactRetrievalSelection;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration\UserOutlookIntegrationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactRetrievalSelection($contactRetrievalSelection = null)
    {
        $this->contactRetrievalSelection = ($contactRetrievalSelection InstanceOf OutlookIntegrationContactRetrievalSelection)
             ? $contactRetrievalSelection
             : new OutlookIntegrationContactRetrievalSelection($contactRetrievalSelection);
        $this->contactRetrievalSelection->setElementName('contactRetrievalSelection');
        return $this;
    }

    /**
     * 
     * @return OutlookIntegrationContactRetrievalSelection $contactRetrievalSelection
     */
    public function getContactRetrievalSelection()
    {
        return ($this->contactRetrievalSelection)
            ? $this->contactRetrievalSelection->getElementValue()
            : null;
    }
}
