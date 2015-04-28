<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Service Profile Information for group service used when modifying an existing service instance.
 */
class ServiceInstanceModifyProfile extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceInstanceModifyProfile';
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
    protected $publicUserIdentity;

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
         $sipAliasList = null,
         $publicUserIdentity = null
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
        $this->setPublicUserIdentity($publicUserIdentity);
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
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = new SimpleContent($callingLineIdLastName);
        $this->callingLineIdLastName->setElementName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName)
            ? $this->callingLineIdLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = new SimpleContent($callingLineIdFirstName);
        $this->callingLineIdFirstName->setElementName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName)
            ? $this->callingLineIdFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = new SimpleContent($hiraganaLastName);
        $this->hiraganaLastName->setElementName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return ($this->hiraganaLastName)
            ? $this->hiraganaLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = new SimpleContent($hiraganaFirstName);
        $this->hiraganaFirstName->setElementName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return ($this->hiraganaFirstName)
            ? $this->hiraganaFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = new SimpleContent($extension);
        $this->extension->setElementName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return ($this->extension)
            ? $this->extension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = new SimpleContent($password);
        $this->password->setElementName('password');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $password
     */
    public function getPassword()
    {
        return ($this->password)
            ? $this->password->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment($department = null)
    {
        $this->department = new SimpleContent($department);
        $this->department->setElementName('department');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $department
     */
    public function getDepartment()
    {
        return ($this->department)
            ? $this->department->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        $this->language = new SimpleContent($language);
        $this->language->setElementName('language');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $language
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
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = new SimpleContent($timeZone);
        $this->timeZone->setElementName('timeZone');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone)
            ? $this->timeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipAliasList($sipAliasList = null)
    {
        $this->sipAliasList = new SimpleContent($sipAliasList);
        $this->sipAliasList->setElementName('sipAliasList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sipAliasList
     */
    public function getSipAliasList()
    {
        return ($this->sipAliasList)
            ? $this->sipAliasList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        $this->publicUserIdentity = new SimpleContent($publicUserIdentity);
        $this->publicUserIdentity->setElementName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return ($this->publicUserIdentity)
            ? $this->publicUserIdentity->getElementValue()
            : null;
    }
}
