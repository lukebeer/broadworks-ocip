<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemAdminType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemAdminGetRequest.
 *         The response contains the system or provisioning administrators profile information.
 */
class SystemAdminGetResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemAdminGetResponse';
    protected $firstName = null;
    protected $lastName  = null;
    protected $language  = null;
    protected $adminType = null;
    protected $readOnly  = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAdminGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        if (!$firstName) return $this;
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $firstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        if (!$lastName) return $this;
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return LastName $lastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
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
        return $this->language->getValue();
    }

    /**
     * 
     */
    public function setAdminType($adminType = null)
    {
        if (!$adminType) return $this;
        $this->adminType = ($adminType InstanceOf SystemAdminType)
             ? $adminType
             : new SystemAdminType($adminType);
        $this->adminType->setName('adminType');
        return $this;
    }

    /**
     * 
     * @return SystemAdminType $adminType
     */
    public function getAdminType()
    {
        return $this->adminType->getValue();
    }

    /**
     * 
     */
    public function setReadOnly($readOnly = null)
    {
        if (!$readOnly) return $this;
        $this->readOnly = new PrimitiveType($readOnly);
        $this->readOnly->setName('readOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $readOnly
     */
    public function getReadOnly()
    {
        return $this->readOnly->getValue();
    }
}
