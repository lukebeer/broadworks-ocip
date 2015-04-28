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
 * The parts of a user's display name that a client can display in whatever way is appropriate
 *         for the client application.
 */
class UserDisplayNames extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDisplayNames';
    protected $lastName;
    protected $firstName;
    protected $hiraganaLastName;
    protected $hiraganaFirstName;

    public function __construct(
         $lastName = '',
         $firstName = '',
         $hiraganaLastName = null,
         $hiraganaFirstName = null
    ) {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
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
    public function setLastName($lastName = null)
    {
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setElementName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $lastName
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
    public function setFirstName($firstName = null)
    {
        $this->firstName = new SimpleContent($firstName);
        $this->firstName->setElementName('firstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $firstName
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
}
