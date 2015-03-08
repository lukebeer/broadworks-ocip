<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Criteria for searching for a particular Dn activation state.
 */
class SearchCriteriaExactDnActivation extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDnActivation';
    public    $name      = __CLASS__;
    protected $activated = null;

    public function __construct(
         $activated
    ) {
        $this->setActivated($activated);
    }

    /**
     * 
     */
    public function setActivated($activated = null)
    {
        $this->activated = (boolean) $activated;
    }

    /**
     * 
     */
    public function getActivated()
    {
        return (!$this->activated) ?: $this->activated->getValue();
    }
}
