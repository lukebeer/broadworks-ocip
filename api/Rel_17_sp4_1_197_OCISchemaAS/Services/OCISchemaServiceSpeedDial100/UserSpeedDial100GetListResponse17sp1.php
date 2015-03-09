<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial100; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Entry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial100\UserSpeedDial100GetListResponse17sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSpeedDial100GetListRequest17sp1.
 */
class UserSpeedDial100GetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $prefix         = null;
    protected $speedDialEntry = null;

    /**
     * @return UserSpeedDial100GetListResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Speed dial prefix.
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf SpeedDialPrefix)
             ? $prefix
             : new SpeedDialPrefix($prefix);
    }

    /**
     * Speed dial prefix.
     */
    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->getValue();
    }

    /**
     * Modify the speed dial 100 prefix setting for a group.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function setSpeedDialEntry(SpeedDial100Entry $speedDialEntry = null)
    {
        $this->speedDialEntry =  $speedDialEntry;
    }

    /**
     * Modify the speed dial 100 prefix setting for a group.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function getSpeedDialEntry()
    {
        return (!$this->speedDialEntry) ?: $this->speedDialEntry->getValue();
    }
}
