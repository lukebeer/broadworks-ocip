<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of attendant console display columns that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 */
class AttendantConsoleReplacementDisplayColumnList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AttendantConsoleReplacementDisplayColumnList';
    protected $displayColumn;

    public function __construct(
         $displayColumn = null
    ) {
        $this->setDisplayColumn($displayColumn);
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
    public function setDisplayColumn($displayColumn = null)
    {
        $this->displayColumn = new SimpleContent($displayColumn);
        $this->displayColumn->setElementName('displayColumn');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $displayColumn
     */
    public function getDisplayColumn()
    {
        return ($this->displayColumn)
            ? $this->displayColumn->getElementValue()
            : null;
    }
}
