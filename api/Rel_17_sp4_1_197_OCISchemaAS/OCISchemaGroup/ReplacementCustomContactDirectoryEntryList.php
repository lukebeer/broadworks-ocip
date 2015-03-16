<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of userIds and/or Virtual On-Net user DNs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementCustomContactDirectoryEntryList extends ComplexType implements ComplexInterface
{
    public    $name = 'ReplacementCustomContactDirectoryEntryList';
    protected $entry;

    public function __construct(
         $entry = null
    ) {
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
