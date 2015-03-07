<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldSourceRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupMusicOnHoldGetInstanceRequest14sp6.
 *         Replaced By: GroupMusicOnHoldGetInstanceResponse16
 */
class GroupMusicOnHoldGetInstanceResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $serviceUserId                       = null;
    protected $isActiveDuringCallHold              = null;
    protected $isActiveDuringCallPark              = null;
    protected $isActiveDuringBusyCampOn            = null;
    protected $enableVideo                         = null;
    protected $source                              = null;
    protected $useAlternateSourceForInternalCalls  = null;
    protected $internalSource                      = null;


    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setIsActiveDuringCallHold(xs:boolean $isActiveDuringCallHold = null)
    {
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark(xs:boolean $isActiveDuringCallPark = null)
    {
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setIsActiveDuringBusyCampOn(xs:boolean $isActiveDuringBusyCampOn = null)
    {
    }

    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->value();
    }

    public function setEnableVideo(xs:boolean $enableVideo = null)
    {
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setSource(MusicOnHoldSourceRead $source = null)
    {
    }

    public function getSource()
    {
        return (!$this->source) ?: $this->source->value();
    }

    public function setUseAlternateSourceForInternalCalls(xs:boolean $useAlternateSourceForInternalCalls = null)
    {
    }

    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->value();
    }

    public function setInternalSource(MusicOnHoldSourceRead $internalSource = null)
    {
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
