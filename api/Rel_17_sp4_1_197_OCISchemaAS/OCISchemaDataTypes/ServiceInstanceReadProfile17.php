<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Service Profile Information for group service.
 *         It is identical to the ServiceInstanceAddProfile, but without the password.
 */
class ServiceInstanceReadProfile17 extends ComplexType implements ComplexInterface
{
    public    $name                   = 'ServiceInstanceReadProfile17';
    protected $name                   = null;
    protected $callingLineIdLastName  = null;
    protected $callingLineIdFirstName = null;
    protected $hiraganaLastName       = null;
    protected $hiraganaFirstName      = null;
    protected $phoneNumber            = null;
    protected $extension              = null;
    protected $department             = null;
    protected $language               = null;
    protected $timeZone               = null;
    protected $timeZoneDisplayName    = null;
    protected $alias                  = null;
    protected $publicUserIdentity     = null;

    public function __construct(
         $name,
         $callingLineIdLastName,
         $callingLineIdFirstName,
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $phoneNumber = null,
         $extension = null,
         $department = null,
         $language = null,
         $timeZone = null,
         $timeZoneDisplayName = null,
         $alias = null,
         $publicUserIdentity = null
    ) {
        $this->setName($name);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setTimeZoneDisplayName($timeZoneDisplayName);
        $this->setAlias($alias);
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
        if (!$name) return $this;
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
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        if (!$callingLineIdLastName) return $this;
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
        return $this->callingLineIdLastName->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        if (!$callingLineIdFirstName) return $this;
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
        return $this->callingLineIdFirstName->getValue();
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        if (!$hiraganaLastName) return $this;
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
        return $this->hiraganaLastName->getValue();
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        if (!$hiraganaFirstName) return $this;
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
        return $this->hiraganaFirstName->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
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
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        if (!$extension) return $this;
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
        return $this->extension->getValue();
    }

    /**
     * 
     */
    public function setDepartment($department = null)
    {
        if (!$department) return $this;
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
        return $this->department->getValue();
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
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
        return $this->language->getValue();
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        if (!$timeZone) return $this;
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
        return $this->timeZone->getValue();
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        if (!$timeZoneDisplayName) return $this;
        $this->timeZoneDisplayName = new SimpleContent($timeZoneDisplayName);
        $this->timeZoneDisplayName->setName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName->getValue();
    }

    /**
     * 
     */
    public function setAlias($alias = null)
    {
        if (!$alias) return $this;
        $this->alias = new SimpleContent($alias);
        $this->alias->setName('alias');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alias
     */
    public function getAlias()
    {
        return $this->alias->getValue();
    }

    /**
     * 
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        if (!$publicUserIdentity) return $this;
        $this->publicUserIdentity = new SimpleContent($publicUserIdentity);
        $this->publicUserIdentity->setName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity->getValue();
    }
}
