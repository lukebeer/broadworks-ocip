<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The OCITable type is used in responses only, never in requests.
 *         The table consists of rows and columns of strings. Each column has a column
 *         heading. Clients should search the column headings to find a particular
 *         column. Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns.
 */
class OCITable extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\OCITable';
    public    $name       = 'OCITable';
    protected $colHeading = null;
    protected $row        = null;

    public function __construct(
         $colHeading = null,
         $row = null
    ) {
        $this->setColHeading($colHeading);
        $this->setRow($row);
    }

    /**
     * @return OCITable
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setColHeading($colHeading = null)
    {
        if (!$colHeading) return $this;
        $this->colHeading = new SimpleContent($colHeading);
        $this->colHeading->setName('colHeading');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getColHeading()
    {
        return $this->colHeading->getValue();
    }

    /**
     * 
     */
    public function setRow($row = null)
    {
        if (!$row) return $this;
        $this->row = new SimpleContent($row);
        $this->row->setName('row');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRow()
    {
        return $this->row->getValue();
    }
}
