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


/**
     * Get an existing Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse';
    public    $name                       = __CLASS__;
    protected $name                       = null;
    protected $responseSizeLimit          = null;
    protected $searchCriteriaDigitPattern = null;

    public function __construct(
         $name,
         $responseSizeLimit = null,
          $searchCriteriaDigitPattern = null
    ) {
        $this->setName($name);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDigitPattern($searchCriteriaDigitPattern);
    }

    /**
     * Digit Pattern Criteria Name
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
    }

    /**
     * Digit Pattern Criteria Name
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for digit pattern.
     */
    public function setSearchCriteriaDigitPattern(SearchCriteriaDigitPattern $searchCriteriaDigitPattern = null)
    {
        $this->searchCriteriaDigitPattern =  $searchCriteriaDigitPattern;
    }

    /**
     * Criteria for searching for digit pattern.
     */
    public function getSearchCriteriaDigitPattern()
    {
        return (!$this->searchCriteriaDigitPattern) ?: $this->searchCriteriaDigitPattern->getValue();
    }
}
