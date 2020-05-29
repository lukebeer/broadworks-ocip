<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder\Types;

use Console_Table;
use SimpleXMLElement;


/**
 * Class TableType - Used for OCITable responses only, never in requests.
 *
 * @package BroadworksOCIP\Builder\Types
 */
class TableType
{
    protected $colHeadings;
    protected $responseType;
    protected $rows = [];

    use TypeTrait;

    /**
     * Generates table from simpleXMLElement object.
     *
     * @param $name
     * @param null $simpleXmlElement
     */
    public function __construct($name, SimpleXMLElement $simpleXmlElement = null)
    {
        $this->setElementName($name);
        if ($simpleXmlElement) {
            $this->setColHeadings((array)$simpleXmlElement->children()->colHeading);
            foreach ($simpleXmlElement->children()->row as $row) {
                $this->addRow((array)$row->col);
            }
        }
    }

    /**
     * Add row into rows array.
     *
     * @param $row
     * @return TableType $this
     */
    public function addRow($row)
    {
        $this->rows[] = $row;
        return $this;
    }

    /**
     * Remove row from rows array.
     *
     * @param $row
     * @return TableType $this
     */
    public function delRow($row)
    {
        if ($row) {
            unset($this->rows[$row]);
        }
        return $this;
    }

    /**
     * Return single row by index.
     *
     * @param $row
     * @return array
     */
    public function getRow($row)
    {
        return $this->rows[$row];
    }

    /**
     * Get column from table.
     * An optional parameter of key can be used to return column as key=>value pair.
     *
     * @param $column
     * @param null $index_key
     * @return array
     */
    public function getColumn($column, $index_key = null)
    {
        return array_column($this->rows, $column, $index_key);
    }

    /**
     * Search rows for data, return the row.
     *
     * @param $search
     * @return bool
     */
    public function findRow($search)
    {
        foreach ($this->rows as $row) {
            if (in_array($search, $row, null)) {
                return $row;
            }
        }
        return false;
    }

    /**
     * Return pretty printed table from data, useful for printing to console or wrapped in <pre>
     * @return string
     */
    public function getValue()
    {
        $tbl = new Console_Table();
        $tbl->setHeaders($this->getColHeadings());
        $tbl->addData($this->getAllRows());
        return $tbl->getTable();
    }

    /**
     * Return column headings used in table.
     *
     * @return mixed
     */
    public function getColHeadings()
    {
        return $this->colHeadings;
    }

    /**
     * Set column headings used in table.
     *
     * @param array $colHeadings
     * @return TableType $this
     */
    public function setColHeadings(array $colHeadings)
    {
        $this->colHeadings = $colHeadings;
        return $this;
    }

    /**
     * Return all rows.
     *
     * @return array
     */
    public function getAllRows()
    {
        return $this->rows;
    }
}