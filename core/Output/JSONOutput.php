<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Output;

/**
 * Class JSONOutput
 * @package Broadworks_OCIP\core\Output
 */
class JSONOutput implements OutputInterface
{

    public static function render($data = '')
    {
        echo json_encode(['prompt' => '', 'payload' => $data]);
    }
}