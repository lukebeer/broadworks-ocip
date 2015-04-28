<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Uniquely identifies a department system-wide.
 *         Departments are contained in either an enterprise or a group. Enterprise departments can be
 *         used by any or all groups within the enterprise. Department names are unique within a group and
 *         within an enterprise, but the same department name can exist in 2 different groups or in both
 *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
 *         the department name and which enterprise or group contains the department.
 *         This type is extended by group and enterprise department keys.
 */
class DepartmentKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DepartmentKey';

    public function __construct(    ) {
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
