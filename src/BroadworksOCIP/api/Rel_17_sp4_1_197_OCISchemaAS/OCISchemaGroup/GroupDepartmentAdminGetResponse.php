<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupDepartmentAdminGetRequest.
 *         The response contains the group department administrators profile information.
 */
class GroupDepartmentAdminGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDepartmentAdminGetResponse';
    protected $departmentKey;
    protected $departmentFullPath;
    protected $firstName;
    protected $lastName;
    protected $language;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentKey(GroupDepartmentKey $departmentKey = null)
    {
        $this->departmentKey = ($departmentKey InstanceOf GroupDepartmentKey)
             ? $departmentKey
             : new GroupDepartmentKey($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentKey $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * 
     */
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentName)
             ? $departmentFullPath
             : new DepartmentName($departmentFullPath);
        $this->departmentFullPath->setElementName('departmentFullPath');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $departmentFullPath
     */
    public function getDepartmentFullPath()
    {
        return ($this->departmentFullPath)
            ? $this->departmentFullPath->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
        $this->firstName->setElementName('firstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $firstName
     */
    public function getFirstName()
    {
        return ($this->firstName)
            ? $this->firstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
        $this->lastName->setElementName('lastName');
        return $this;
    }

    /**
     * 
     * @return LastName $lastName
     */
    public function getLastName()
    {
        return ($this->lastName)
            ? $this->lastName->getElementValue()
            : null;
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
}
