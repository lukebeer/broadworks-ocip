<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLanguageGetListRequest.
 *         The language table column headings are: "Language", "Locale" and "Encoding".
 */
class SystemLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLanguageGetListResponse';
    protected $defaultLanguage;
    protected $languageTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLanguageGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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

    /**
     * 
     */
    public function setLanguageTable(TableType $languageTable = null)
    {
        $this->languageTable = $languageTable;
        $this->languageTable->setElementName('languageTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLanguageTable()
    {
        return $this->languageTable;
    }
}
