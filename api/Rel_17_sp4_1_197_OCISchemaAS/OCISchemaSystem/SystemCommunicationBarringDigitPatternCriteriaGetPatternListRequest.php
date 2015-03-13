<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDigitPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an existing Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    public    $name                       = 'SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest';
    protected $name                       = null;
    protected $responseSizeLimit          = null;
    protected $searchCriteriaDigitPattern = null;

    public function __construct(
         $name,
         $responseSizeLimit = null,
         SearchCriteriaDigitPattern $searchCriteriaDigitPattern = null
    ) {
        $this->setName($name);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDigitPattern($searchCriteriaDigitPattern);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaDigitPattern(SearchCriteriaDigitPattern $searchCriteriaDigitPattern = null)
    {
        if (!$searchCriteriaDigitPattern) return $this;
        $this->searchCriteriaDigitPattern = ($searchCriteriaDigitPattern InstanceOf SearchCriteriaDigitPattern)
             ? $searchCriteriaDigitPattern
             : new SearchCriteriaDigitPattern($searchCriteriaDigitPattern);
        $this->searchCriteriaDigitPattern->setName('searchCriteriaDigitPattern');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDigitPattern $searchCriteriaDigitPattern
     */
    public function getSearchCriteriaDigitPattern()
    {
        return $this->searchCriteriaDigitPattern;
    }
}
