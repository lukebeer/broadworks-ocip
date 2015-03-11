<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Phone list entry.
 */
class PhoneListEntry extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry';
    public    $name        = 'PhoneListEntry';
    protected $entryName   = null;
    protected $phoneNumber = null;

    public function __construct(
         $entryName,
         $phoneNumber
    ) {
        $this->setEntryName($entryName);
        $this->setPhoneNumber($phoneNumber);
    }

    /**
     * @return PhoneListEntry
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntryName($entryName = null)
    {
        if (!$entryName) return $this;
        $this->entryName = new SimpleContent($entryName);
        $this->entryName->setName('entryName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEntryName()
    {
        return $this->entryName->getValue();
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
     * @return SimpleContent
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }
}
