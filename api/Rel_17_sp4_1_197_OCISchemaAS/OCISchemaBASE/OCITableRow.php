<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The OCITableRow type is used in responses only, never in requests. It occurs
 *         inside the OCITable type. The OCITableRow consists columns of strings.
 *         Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns. See the OCITable data type
 *         for more information.
 */
class OCITableRow extends ComplexType implements ComplexInterface
{
    public    $name = 'OCITableRow';
    protected $col;

    public function __construct(
         $col = null
    ) {
        $this->setCol($col);
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
    public function setCol($col = null)
    {
        $this->col = new SimpleContent($col);
        $this->col->setName('col');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $col
     */
    public function getCol()
    {
        return ($this->col) ? $this->col->getValue() : null;
    }
}
