<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a name in an enterprise common phone list.
 */
class SearchCriteriaEnterpriseCommonPhoneListName extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEnterpriseCommonPhoneListName';
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
     * @return SearchCriteriaEnterpriseCommonPhoneListName
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * The name in a phone list entry.
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf PhoneListEntryName)
             ? $value
             : new PhoneListEntryName($value);
    }

    /**
     * The name in a phone list entry.
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
        return (!$this->isCaseInsensitive) ?: $this->isCaseInsensitive;
    }
}
