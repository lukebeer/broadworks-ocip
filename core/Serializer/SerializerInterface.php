<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Serializer;

/**
 * Interface SerializerInterface - Interface all Serializers must implement.
 *
 * @package Broadworks_OCIP\core\Serializer
 */
interface SerializerInterface
{
    public function serialize($destinationObject, $data);
}