<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Criteria for searching for a SIP Contact.
 */
class SearchCriteriaSIPContact extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaSIPContact';
    public    $name              = __CLASS__;
    protected $mode              = null;
    protected $value             = null;
    protected $isCaseInsensitive = null;

    public function __construct(
         $mode,
         $value,
         $isCaseInsensitive
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
    }

    /**
     * Search mode when searching for string data.
     */
    public function setMode($mode = null)
    {
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
    }

    /**
     * Search mode when searching for string data.
     */
    public function getMode()
    {
        return (!$this->mode) ?: $this->mode->getValue();
    }

    /**
     * SIP Registration Contact without the sip: prefix.
     *         Validation:
     *          - do not allow sip:
     *          - allow the following characters:
     *            alphanumeric   ampersand    =   +   $   ,   ;   ?   /   -   _   .   !   ~   *   '   (   )   :  @
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf SIPContact)
             ? $value
             : new SIPContact($value);
    }

    /**
     * SIP Registration Contact without the sip: prefix.
     *         Validation:
     *          - do not allow sip:
     *          - allow the following characters:
     *            alphanumeric   ampersand    =   +   $   ,   ;   ?   /   -   _   .   !   ~   *   '   (   )   :  @
     */
    public function getValue()
    {
        return (!$this->value) ?: $this->value->getValue();
    }

    /**
     * 
     */
    public function setIsCaseInsensitive($isCaseInsensitive = null)
    {
        $this->isCaseInsensitive = (boolean) $isCaseInsensitive;
    }

    /**
     * 
     */
    public function getIsCaseInsensitive()
    {
        return (!$this->isCaseInsensitive) ?: $this->isCaseInsensitive->getValue();
    }
}
