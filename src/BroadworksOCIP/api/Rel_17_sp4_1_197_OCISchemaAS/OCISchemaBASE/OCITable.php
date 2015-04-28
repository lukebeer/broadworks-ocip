<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The OCITable type is used in responses only, never in requests.
 *         The table consists of rows and columns of strings. Each column has a column
 *         heading. Clients should search the column headings to find a particular
 *         column. Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns.
 */
class OCITable extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OCITable';
    protected $colHeading;
    protected $row;

    public function __construct(
         $colHeading = null,
         $row = null
    ) {
        $this->setColHeading($colHeading);
        $this->setRow($row);
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
    public function setColHeading($colHeading = null)
    {
        $this->colHeading = new SimpleContent($colHeading);
        $this->colHeading->setElementName('colHeading');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $colHeading
     */
    public function getColHeading()
    {
        return ($this->colHeading)
            ? $this->colHeading->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRow($row = null)
    {
        $this->row = new SimpleContent($row);
        $this->row->setElementName('row');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $row
     */
    public function getRow()
    {
        return ($this->row)
            ? $this->row->getElementValue()
            : null;
    }
}
