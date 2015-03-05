<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaDigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an existing Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $responseSizeLimit=null,
             $searchCriteriaDigitPattern=null
    ) {
        $this->name                       = new DigitPatternCriteriaName($name);
        $this->responseSizeLimit          = $responseSizeLimit;
        $this->searchCriteriaDigitPattern = $searchCriteriaDigitPattern;
        $this->args                       = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new DigitPatternCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaDigitPattern($searchCriteriaDigitPattern)
    {
        $searchCriteriaDigitPattern and $this->searchCriteriaDigitPattern = new SearchCriteriaDigitPattern($searchCriteriaDigitPattern);
    }

    public function getSearchCriteriaDigitPattern()
    {
        return (!$this->searchCriteriaDigitPattern) ?: $this->searchCriteriaDigitPattern->value();
    }
}
