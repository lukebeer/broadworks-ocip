<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Serializer;

/**
 * Interface SerializerInterface
 * @package Broadworks_OCIP\core\Serializer
 */
interface SerializerInterface {
    public function serialize($destinationObject, $data);
}