<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactEndpointType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a particular endpoint type.
 */
class SearchCriteriaExactEndpointType extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactEndpointType';
    public    $name         = 'SearchCriteriaExactEndpointType';
    protected $endpointType = null;

    public function __construct(
         $endpointType
    ) {
        $this->setEndpointType($endpointType);
    }

    /**
     * @return SearchCriteriaExactEndpointType
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        if (!$endpointType) return $this;
        $this->endpointType = ($endpointType InstanceOf EndpointType)
             ? $endpointType
             : new EndpointType($endpointType);
        $this->endpointType->setName('endpointType');
        return $this;
    }

    /**
     * 
     * @return EndpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType->getValue();
    }
}
