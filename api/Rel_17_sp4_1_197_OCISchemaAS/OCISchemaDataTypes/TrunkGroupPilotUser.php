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
 * Trunk Group pilot user information used when adding a Trunk Group.
 */
class TrunkGroupPilotUser extends ComplexType implements ComplexInterface
{
    public    $name                   = 'TrunkGroupPilotUser';
    protected $userId                 = null;
    protected $lastName               = null;
    protected $firstName              = null;
    protected $callingLineIdLastName  = null;
    protected $callingLineIdFirstName = null;
    protected $hiraganaLastName       = null;
    protected $hiraganaFirstName      = null;
    protected $password               = null;
    protected $department             = null;
    protected $language               = null;
    protected $timeZone               = null;
    protected $linePort               = null;
    protected $contact                = null;

    public function __construct(
         $userId,
         $lastName,
         $firstName,
         $callingLineIdLastName,
         $callingLineIdFirstName,
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $password = null,
         $department = null,
         $language = null,
         $timeZone = null,
         $linePort,
         $contact = null
    ) {
        $this->setUserId($userId);
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
        $this->setPassword($password);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setLinePort($linePort);
        $this->setContact($contact);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = new SimpleContent($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        if (!$lastName) return $this;
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $lastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        if (!$firstName) return $this;
        $this->firstName = new SimpleContent($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $firstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
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
    public function setPassword($password = null)
    {
        if (!$password) return $this;
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
        return $this->password->getValue();
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
    public function setLinePort($linePort = null)
    {
        if (!$linePort) return $this;
        $this->linePort = new SimpleContent($linePort);
        $this->linePort->setName('linePort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $linePort
     */
    public function getLinePort()
    {
        return $this->linePort->getValue();
    }

    /**
     * 
     */
    public function setContact($contact = null)
    {
        if (!$contact) return $this;
        $this->contact = new SimpleContent($contact);
        $this->contact->setName('contact');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contact
     */
    public function getContact()
    {
        return $this->contact->getValue();
    }
}
