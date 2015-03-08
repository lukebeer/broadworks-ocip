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
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactCustomContactDirectory';
    public    $name                       = __CLASS__;
    protected $customContactDirectoryName = null;

    public function __construct(
         $customContactDirectoryName
    ) {
        $this->setCustomContactDirectoryName($customContactDirectoryName);
    }

    /**
     * Custom Contact Directory name.
     */
    public function setCustomContactDirectoryName($customContactDirectoryName = null)
    {
        $this->customContactDirectoryName = ($customContactDirectoryName InstanceOf CustomContactDirectoryName)
             ? $customContactDirectoryName
             : new CustomContactDirectoryName($customContactDirectoryName);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getCustomContactDirectoryName()
    {
        return (!$this->customContactDirectoryName) ?: $this->customContactDirectoryName->getValue();
    }
}
