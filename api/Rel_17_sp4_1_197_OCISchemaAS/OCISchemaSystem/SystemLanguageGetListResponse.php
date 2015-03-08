<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemLanguageGetListRequest.
 *         The language table column headings are: "Language", "Locale" and "Encoding".
 */
class SystemLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $defaultLanguage = null;
    protected $languageTable   = null;


    /**
     * Language identifies the language of a user or an administrator.
     */
    public function setDefaultLanguage($defaultLanguage = null)
    {
        $this->defaultLanguage = ($defaultLanguage InstanceOf Language)
             ? $defaultLanguage
             : new Language($defaultLanguage);
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function getDefaultLanguage()
    {
        return (!$this->defaultLanguage) ?: $this->defaultLanguage->getValue();
    }

    /**
     * 
     */
    public function setLanguageTable(core:OCITable $languageTable = null)
    {
        $this->languageTable =  $languageTable;
    }

    /**
     * 
     */
    public function getLanguageTable()
    {
        return (!$this->languageTable) ?: $this->languageTable->getValue();
    }
}
