<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCILocale;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Encoding;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a language to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLanguageAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLanguageAddRequest';
    protected $language;
    protected $locale;
    protected $encoding;

    public function __construct(
         $language = '',
         $locale = '',
         $encoding = ''
    ) {
        $this->setLanguage($language);
        $this->setLocale($locale);
        $this->setEncoding($encoding);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return ($this->language) ? $this->language->getValue() : null;
    }

    /**
     * 
     */
    public function setLocale($locale = null)
    {
        $this->locale = ($locale InstanceOf OCILocale)
             ? $locale
             : new OCILocale($locale);
        $this->locale->setName('locale');
        return $this;
    }

    /**
     * 
     * @return OCILocale $locale
     */
    public function getLocale()
    {
        return ($this->locale) ? $this->locale->getValue() : null;
    }

    /**
     * 
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = ($encoding InstanceOf Encoding)
             ? $encoding
             : new Encoding($encoding);
        $this->encoding->setName('encoding');
        return $this;
    }

    /**
     * 
     * @return Encoding $encoding
     */
    public function getEncoding()
    {
        return ($this->encoding) ? $this->encoding->getValue() : null;
    }
}
