<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The configuration of a key for Auto Attendant.
 */
class AutoAttendantKeyConfiguration extends ComplexType implements ComplexInterface
{
    public    $name = 'AutoAttendantKeyConfiguration';
    protected $key;
    protected $entry;

    public function __construct(
         $key = '',
         $entry = ''
    ) {
        $this->setKey($key);
        $this->setEntry($entry);
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
    public function setKey($key = null)
    {
        $this->key = new SimpleContent($key);
        $this->key->setName('key');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $key
     */
    public function getKey()
    {
        return ($this->key) ? $this->key->getValue() : null;
    }

    /**
     * 
     */
    public function setEntry($entry = null)
    {
        $this->entry = new SimpleContent($entry);
        $this->entry->setName('entry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $entry
     */
    public function getEntry()
    {
        return ($this->entry) ? $this->entry->getValue() : null;
    }
}
