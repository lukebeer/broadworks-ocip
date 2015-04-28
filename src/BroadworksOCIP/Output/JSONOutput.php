<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Output;

/**
 * Class JSONOutput - Generates and echos JSON.
 *
 * @package BroadworksOCIP\Output
 */
class JSONOutput implements OutputInterface
{

    public static function render($data = '')
    {
        echo json_encode(['prompt' => '', 'payload' => $data]);
    }
}