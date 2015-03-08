<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderLanguageGetAvailableListRequest.
 *         The language table column headings are: "Language", "Locale" and "Encoding".
 */
class ServiceProviderLanguageGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderLanguageGetAvailableListResponse';
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
        $this->languageTable = core:OCITable $languageTable;
    }

    /**
     * 
     */
    public function getLanguageTable()
    {
        return (!$this->languageTable) ?: $this->languageTable->getValue();
    }
}
