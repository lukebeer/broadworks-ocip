<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OrganizationType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactOrganizationType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for an organization type.
 */
class SearchCriteriaExactOrganizationType extends ComplexType implements ComplexInterface
{
    public    $responseType     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactOrganizationType';
    public    $name             = __CLASS__;
    protected $organizationType = null;

    public function __construct(
         $organizationType
    ) {
        $this->setOrganizationType($organizationType);
    }

    /**
     * @return SearchCriteriaExactOrganizationType
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Types of organizations.
     */
    public function setOrganizationType($organizationType = null)
    {
        $this->organizationType = ($organizationType InstanceOf OrganizationType)
             ? $organizationType
             : new OrganizationType($organizationType);
    }

    /**
     * Types of organizations.
     */
    public function getOrganizationType()
    {
        return (!$this->organizationType) ?: $this->organizationType->getValue();
    }
}
