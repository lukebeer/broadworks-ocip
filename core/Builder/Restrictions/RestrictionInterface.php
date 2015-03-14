<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Interface RestrictionInterface - Interface all Restrictins must implement.
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
interface RestrictionInterface
{

    /**
     * @param $value
     */
    public function __construct($value);

    /**
     * @param $input
     * @return mixed
     */
    public function validate($input);

    /**
     * @return mixed
     */
    public function detail();
}