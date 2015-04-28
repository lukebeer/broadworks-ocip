<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Serializer;

/**
 * Interface SerializerInterface - Interface all Serializers must implement.
 *
 * @package BroadworksOCIP\Serializer
 */
interface SerializerInterface
{
    public function serialize($destinationObject, $data);
}