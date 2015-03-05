<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a phone number in a group common phone list.
 */
class SearchCriteriaGroupCommonPhoneListNumber extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mode,
             $value,
             $isCaseInsensitive
    ) {
        $this->mode              = $mode;
        $this->value             = new OutgoingDN($value);
        $this->isCaseInsensitive = $isCaseInsensitive;
        $this->args              = func_get_args();
    }

    public function setMode($mode)
    {
        $mode and $this->mode = new SearchMode($mode);
    }

    public function getMode()
    {
        return (!$this->mode) ?: $this->mode->value();
    }

    public function setValue($value)
    {
        $value and $this->value = new OutgoingDN($value);
    }

    public function getValue()
    {
        return (!$this->value) ?: $this->value->value();
    }

    public function setIsCaseInsensitive($isCaseInsensitive)
    {
        $isCaseInsensitive and $this->isCaseInsensitive = new xs:boolean($isCaseInsensitive);
    }

    public function getIsCaseInsensitive()
    {
        return (!$this->isCaseInsensitive) ?: $this->isCaseInsensitive->value();
    }
}
