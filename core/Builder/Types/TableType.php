<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Types;


/**
 * Class TableType - Used for OCITable responses only, never in requests.
 *
 * @package Broadworks_OCIP\core\Builder\Types
 */
class TableType
{
    public $name = __CLASS__;
    protected $colHeadings;
    protected $responseType;
    protected $rows;

    /**
     * Generates table from simpleXMLElement object.
     *
     * @param $name
     * @param null $simpleXmlElement
     */
    public function __construct($name, \SimpleXMLElement $simpleXmlElement = null)
    {
        $this->setName($name);
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
            if (in_array($search, $row)) return $row;
        }
        return false;
    }

    /**
     * Return table name.
     */
    public function getName()
    {
        $this->name;
    }

    /**
     * Set name.
     *
     * @param $name
     * @return TableType $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Return pretty printed table from data, useful for printing to console or wrapped in <pre>
     * @return string
     */
    public function getValue()
    {
        require_once 'Console/Table.php';
        $tbl = new \Console_Table();
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
    public function setColHeadings(Array $colHeadings)
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