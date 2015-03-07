<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
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
    public    $name                   = __CLASS__;
    protected $language               = null;
    protected $becomeDefaultLanguage  = null;
    protected $locale                 = null;
    protected $encoding               = null;

    public function __construct(
         $language,
         $becomeDefaultLanguage = null,
         $locale = null,
         $encoding = null
    ) {
        $this->setLanguage($language);
        $this->setBecomeDefaultLanguage($becomeDefaultLanguage);
        $this->setLocale($locale);
        $this->setEncoding($encoding);
    }

    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
    }

    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->value();
    }

    public function setBecomeDefaultLanguage(xs:boolean $becomeDefaultLanguage = null)
    {
    }

    public function getBecomeDefaultLanguage()
    {
        return (!$this->becomeDefaultLanguage) ?: $this->becomeDefaultLanguage->value();
    }

    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
    }

    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->value();
    }

    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
    }

    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->value();
    }
}
