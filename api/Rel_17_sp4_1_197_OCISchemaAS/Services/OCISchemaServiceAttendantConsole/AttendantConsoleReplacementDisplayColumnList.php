<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of attendant console display columns that replaces a previously configured list.
 *         By convention, an element of this type may be set nil to clear the list.
 */
class AttendantConsoleReplacementDisplayColumnList extends ComplexType implements ComplexInterface
{
    public    $name          = 'AttendantConsoleReplacementDisplayColumnList';
    protected $displayColumn = null;

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
        if (!$displayColumn) return $this;
        $this->displayColumn = new SimpleContent($displayColumn);
        $this->displayColumn->setName('displayColumn');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $displayColumn
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn->getValue();
    }
}
