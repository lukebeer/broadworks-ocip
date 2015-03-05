<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a language properties in the system.
 *         If the becomeDefaultLanguage element is present, the language in this request becomes
 *         the default language for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $language,
             $becomeDefaultLanguage=null,
             $locale=null,
             $encoding=null
    ) {
        $this->language              = new Language($language);
        $this->becomeDefaultLanguage = $becomeDefaultLanguage;
        $this->locale                = new OCILocale($locale);
        $this->encoding              = new Encoding($encoding);
        $this->args                  = func_get_args();
    }

    public function setLanguage($language)
    {
        $language and $this->language = new Language($language);
    }

    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->value();
    }

    public function setBecomeDefaultLanguage($becomeDefaultLanguage)
    {
        $becomeDefaultLanguage and $this->becomeDefaultLanguage = new xs:boolean($becomeDefaultLanguage);
    }

    public function getBecomeDefaultLanguage()
    {
        return (!$this->becomeDefaultLanguage) ?: $this->becomeDefaultLanguage->value();
    }

    public function setLocale($locale)
    {
        $locale and $this->locale = new OCILocale($locale);
    }

    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->value();
    }

    public function setEncoding($encoding)
    {
        $encoding and $this->encoding = new Encoding($encoding);
    }

    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->value();
    }
}
