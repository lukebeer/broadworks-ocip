<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class Restriction
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
abstract class Restriction
{
    protected $value;
    protected $detail;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @param null $detail
     * @return null
     */
    public function detail($detail = null)
    {
        if ($detail) $this->detail = $detail;
        return $this->detail;
    }
}