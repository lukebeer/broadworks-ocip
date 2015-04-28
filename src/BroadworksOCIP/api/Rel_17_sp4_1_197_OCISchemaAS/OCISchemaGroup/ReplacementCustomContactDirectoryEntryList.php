<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of userIds and/or Virtual On-Net user DNs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementCustomContactDirectoryEntryList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementCustomContactDirectoryEntryList';
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
        $this->entry->setElementName('entry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $entry
     */
    public function getEntry()
    {
        return ($this->entry)
            ? $this->entry->getElementValue()
            : null;
    }
}
