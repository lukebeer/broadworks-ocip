<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OrganizationType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for an organization type.
 */
class SearchCriteriaExactOrganizationType extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactOrganizationType';
    protected $organizationType;

    public function __construct(
         $organizationType = ''
    ) {
        $this->setOrganizationType($organizationType);
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
    public function setOrganizationType($organizationType = null)
    {
        $this->organizationType = ($organizationType InstanceOf OrganizationType)
             ? $organizationType
             : new OrganizationType($organizationType);
        $this->organizationType->setElementName('organizationType');
        return $this;
    }

    /**
     * 
     * @return OrganizationType $organizationType
     */
    public function getOrganizationType()
    {
        return ($this->organizationType)
            ? $this->organizationType->getElementValue()
            : null;
    }
}
