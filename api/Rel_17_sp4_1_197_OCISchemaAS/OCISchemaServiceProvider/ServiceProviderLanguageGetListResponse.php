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
     * Response to ServiceProviderLanguageGetListRequest.
 */
class ServiceProviderLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderLanguageGetListResponse';
    public    $name            = __CLASS__;
    protected $language        = null;
    protected $defaultLanguage = null;


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
}
