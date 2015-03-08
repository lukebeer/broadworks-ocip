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
     * Request to add a language to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageAddRequest extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $language = null;
    protected $locale   = null;
    protected $encoding = null;

    public function __construct(
         $language,
         $locale,
         $encoding
    ) {
        $this->setLanguage($language);
        $this->setLocale($locale);
        $this->setEncoding($encoding);
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
    }

    /**
     * Language identifies the language of a user or an administrator.
     */
    public function getLanguage()
    {
        return (!$this->language) ?: $this->language->getValue();
    }

    /**
     * (ISO Language Code)_(ISO Country Code) or (ISO Language Code) only.
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
    }

    /**
     * (ISO Language Code)_(ISO Country Code) or (ISO Language Code) only.
     */
    public function getLocale()
    {
        return (!$this->locale) ?: $this->locale->getValue();
    }

    /**
     * Character-encoding scheme.
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
    }

    /**
     * Character-encoding scheme.
     */
    public function getEncoding()
    {
        return (!$this->encoding) ?: $this->encoding->getValue();
    }
}
