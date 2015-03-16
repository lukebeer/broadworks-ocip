<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for an organization type.
 */
class SearchCriteriaExactOrganizationType extends ComplexType implements ComplexInterface
{
    public    $name = 'SearchCriteriaExactOrganizationType';
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
        $this->organizationType->setName('organizationType');
        return $this;
    }

    /**
     * 
     * @return OrganizationType $organizationType
     */
    public function getOrganizationType()
    {
        return ($this->organizationType) ? $this->organizationType->getValue() : null;
    }
}
