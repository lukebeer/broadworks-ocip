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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLanguageModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a language properties in the system.
 *         If the becomeDefaultLanguage element is present, the language in this request becomes
 *         the default language for the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $language              = null;
    protected $becomeDefaultLanguage = null;
    protected $locale                = null;
    protected $encoding              = null;

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

    /**
     * @return SystemLanguageModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * 
     */
    public function setBecomeDefaultLanguage($becomeDefaultLanguage = null)
    {
        $this->becomeDefaultLanguage = (boolean) $becomeDefaultLanguage;
    }

    /**
     * 
     */
    public function getBecomeDefaultLanguage()
    {
        return (!$this->becomeDefaultLanguage) ?: $this->becomeDefaultLanguage;
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
