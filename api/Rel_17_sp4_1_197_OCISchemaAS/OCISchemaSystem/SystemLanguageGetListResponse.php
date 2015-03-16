<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLanguageGetListRequest.
 *         The language table column headings are: "Language", "Locale" and "Encoding".
 */
class SystemLanguageGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLanguageGetListResponse';
    protected $defaultLanguage;
    protected $languageTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLanguageGetListResponse $response
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
        $this->defaultLanguage->setName('defaultLanguage');
        return $this;
    }

    /**
     * 
     * @return Language $defaultLanguage
     */
    public function getDefaultLanguage()
    {
        return ($this->defaultLanguage) ? $this->defaultLanguage->getValue() : null;
    }

    /**
     * 
     */
    public function setLanguageTable(TableType $languageTable = null)
    {
        $this->languageTable = $languageTable;
        $this->languageTable->setName('languageTable');
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
