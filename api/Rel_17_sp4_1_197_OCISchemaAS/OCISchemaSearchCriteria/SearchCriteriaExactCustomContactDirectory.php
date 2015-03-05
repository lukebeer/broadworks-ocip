<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular fully specified custom contact directory.
 */
class SearchCriteriaExactCustomContactDirectory extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $customContactDirectoryName
    ) {
        $this->customContactDirectoryName = new CustomContactDirectoryName($customContactDirectoryName);
        $this->args                       = func_get_args();
    }

    public function setCustomContactDirectoryName($customContactDirectoryName)
    {
        $customContactDirectoryName and $this->customContactDirectoryName = new CustomContactDirectoryName($customContactDirectoryName);
    }

    public function getCustomContactDirectoryName()
    {
        return (!$this->customContactDirectoryName) ?: $this->customContactDirectoryName->value();
    }
}
