<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;

use Broadworks_OCIP\core\Client\Client;
use Broadworks_OCIP\core\Response\ResponseOutput;


class TableType
{
    public $name = __CLASS__;
    protected $colHeadings;
    protected $responseType;
    protected $rows;


    public function __construct($name, $simpleXmlElement=null) {
        $this->setName($name);
        if ($simpleXmlElement) {
            $this->setColHeadings((array) $simpleXmlElement->children()->colHeading);
            foreach ($simpleXmlElement->children()->row as $row) {
                $this->addRow((array) $row->col);
            }
        }
    }

    public function setColHeadings(Array $colHeadings) {
        $this->colHeadings = $colHeadings;
        return $this;
    }

    public function getColHeadings() {
        return $this->colHeadings;
    }

    public function addRow($row) {

        $this->rows[] = $row;
        return $this;
    }

    public function delRow($row) {
        if ($row) {
            unset($this->rows[$row]);
        }
        return $this;
    }

    public function getRow($row) {
        return $this->rows[$row];
    }

    public function getAllRows() {
        return $this->rows;
    }

    public function getColumn($column, $index_key=null) {
        return array_column($this->rows, $column, $index_key);
    }

    public function findRow($search) {
        foreach ($this->rows as $row) {
            if (in_array($search, $row)) return $row;
        }
        return false;
    }

    public function getName() {
        $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getValue() {
        require_once 'Console/Table.php';
        $tbl = new \Console_Table();
        $tbl->setHeaders($this->getColHeadings());
        $tbl->addData($this->getAllRows());
        return $tbl->getTable();
    }
}