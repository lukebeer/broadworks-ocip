<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Service Profile Information for a trunk group used when modifying an existing service instance.
 */
class ServiceInstanceModifyProfileTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceInstanceModifyProfileTrunkGroup';
    protected $name;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $hiraganaLastName;
    protected $hiraganaFirstName;
    protected $phoneNumber;
    protected $extension;
    protected $password;
    protected $department;
    protected $language;
    protected $timeZone;
    protected $sipAliasList;

    public function __construct(
         $name = null,
         $callingLineIdLastName = null,
         $callingLineIdFirstName = null,
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $phoneNumber = null,
         $extension = null,
         $password = null,
         $department = null,
         $language = null,
         $timeZone = null,
         $sipAliasList = null
    ) {
        $this->setName($name);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setPassword($password);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setSipAliasList($sipAliasList);
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
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = new SimpleContent($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName) ? $this->callingLineIdLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = new SimpleContent($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName) ? $this->callingLineIdFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = new SimpleContent($hiraganaLastName);
        $this->hiraganaLastName->setName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return ($this->hiraganaLastName) ? $this->hiraganaLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = new SimpleContent($hiraganaFirstName);
        $this->hiraganaFirstName->setName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return ($this->hiraganaFirstName) ? $this->hiraganaFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = new SimpleContent($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return ($this->extension) ? $this->extension->getValue() : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = new SimpleContent($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
     */
    public function getPassword()
    {
        return ($this->password) ? $this->password->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartment($department = null)
    {
        $this->department = new SimpleContent($department);
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $department
     */
    public function getDepartment()
    {
        return ($this->department) ? $this->department->getValue() : null;
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        $this->language = new SimpleContent($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $language
     */
    public function getLanguage()
    {
        return ($this->language) ? $this->language->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = new SimpleContent($timeZone);
        $this->timeZone->setName('timeZone');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone) ? $this->timeZone->getValue() : null;
    }

    /**
     * 
     */
    public function setSipAliasList($sipAliasList = null)
    {
        $this->sipAliasList = new SimpleContent($sipAliasList);
        $this->sipAliasList->setName('sipAliasList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sipAliasList
     */
    public function getSipAliasList()
    {
        return ($this->sipAliasList) ? $this->sipAliasList->getValue() : null;
    }
}
