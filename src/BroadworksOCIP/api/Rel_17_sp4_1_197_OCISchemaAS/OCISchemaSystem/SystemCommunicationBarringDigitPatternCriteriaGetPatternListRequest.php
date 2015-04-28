<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDigitPattern;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get an existing Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    public    $elementName = 'SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest';
    protected $name;
    protected $responseSizeLimit;
    protected $searchCriteriaDigitPattern;

    public function __construct(
         $name = '',
         $responseSizeLimit = null,
         $searchCriteriaDigitPattern = null
    ) {
        $this->setName($name);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDigitPattern($searchCriteriaDigitPattern);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse $response
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
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaDigitPattern(SearchCriteriaDigitPattern $searchCriteriaDigitPattern = null)
    {
        $this->searchCriteriaDigitPattern = ($searchCriteriaDigitPattern InstanceOf SearchCriteriaDigitPattern)
             ? $searchCriteriaDigitPattern
             : new SearchCriteriaDigitPattern($searchCriteriaDigitPattern);
        $this->searchCriteriaDigitPattern->setElementName('searchCriteriaDigitPattern');
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
