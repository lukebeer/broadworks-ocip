<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The parts of a user's display name that a client can display in whatever way is appropriate
 *         for the client application.
 */
class UserDisplayNames extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserDisplayNames';
    public    $name              = 'UserDisplayNames';
    protected $lastName          = null;
    protected $firstName         = null;
    protected $hiraganaLastName  = null;
    protected $hiraganaFirstName = null;

    public function __construct(
         $lastName,
         $firstName,
         $hiraganaLastName = null,
         $hiraganaFirstName = null
    ) {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
    }

    /**
     * @return UserDisplayNames
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
        if (!$lastName) return $this;
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
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
     * @return SimpleContent
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
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
     * @return SimpleContent
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
     * @return SimpleContent
     */
    public function getHiraganaFirstName()
    {
        return $this->hiraganaFirstName->getValue();
    }
}
