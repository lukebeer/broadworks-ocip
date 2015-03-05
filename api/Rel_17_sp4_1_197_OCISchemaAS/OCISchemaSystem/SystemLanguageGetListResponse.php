<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLanguageGetListRequest.
 *         The language table column headings are: "Language", "Locale" and "Encoding".
 */
class SystemLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultLanguage,
             $languageTable
    ) {
        $this->defaultLanguage = new Language($defaultLanguage);
        $this->languageTable   = $languageTable;
        $this->args            = func_get_args();
    }

    public function setDefaultLanguage($defaultLanguage)
    {
        $defaultLanguage and $this->defaultLanguage = new Language($defaultLanguage);
    }

    public function getDefaultLanguage()
    {
        return (!$this->defaultLanguage) ?: $this->defaultLanguage->value();
    }

    public function setLanguageTable($languageTable)
    {
        $languageTable and $this->languageTable = new core:OCITable($languageTable);
    }

    public function getLanguageTable()
    {
        return (!$this->languageTable) ?: $this->languageTable->value();
    }
}
