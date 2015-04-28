<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderLanguageGetListRequest.
 */
class ServiceProviderLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderLanguageGetListResponse';
    protected $language;
    protected $defaultLanguage;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderLanguageGetListResponse $response
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
        $this->language->setElementName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return ($this->language)
            ? $this->language->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultLanguage($defaultLanguage = null)
    {
        $this->defaultLanguage = ($defaultLanguage InstanceOf Language)
             ? $defaultLanguage
             : new Language($defaultLanguage);
        $this->defaultLanguage->setElementName('defaultLanguage');
        return $this;
    }

    /**
     * 
     * @return Language $defaultLanguage
     */
    public function getDefaultLanguage()
    {
        return ($this->defaultLanguage)
            ? $this->defaultLanguage->getElementValue()
            : null;
    }
}
