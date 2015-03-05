<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldSourceRead;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupMusicOnHoldGetInstanceRequest14sp6.
 *         Replaced By: GroupMusicOnHoldGetInstanceResponse16
 */
class GroupMusicOnHoldGetInstanceResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $isActiveDuringCallHold,
             $isActiveDuringCallPark,
             $isActiveDuringBusyCampOn,
             $enableVideo,
             $source,
             $useAlternateSourceForInternalCalls,
             $internalSource=null
    ) {
        $this->serviceUserId                      = new UserId($serviceUserId);
        $this->isActiveDuringCallHold             = $isActiveDuringCallHold;
        $this->isActiveDuringCallPark             = $isActiveDuringCallPark;
        $this->isActiveDuringBusyCampOn           = $isActiveDuringBusyCampOn;
        $this->enableVideo                        = $enableVideo;
        $this->source                             = $source;
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        $this->internalSource                     = $internalSource;
        $this->args                               = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setIsActiveDuringCallHold($isActiveDuringCallHold)
    {
        $isActiveDuringCallHold and $this->isActiveDuringCallHold = new xs:boolean($isActiveDuringCallHold);
    }

    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->value();
    }

    public function setIsActiveDuringCallPark($isActiveDuringCallPark)
    {
        $isActiveDuringCallPark and $this->isActiveDuringCallPark = new xs:boolean($isActiveDuringCallPark);
    }

    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->value();
    }

    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn)
    {
        $isActiveDuringBusyCampOn and $this->isActiveDuringBusyCampOn = new xs:boolean($isActiveDuringBusyCampOn);
    }

    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setSource($source)
    {
        $source and $this->source = new MusicOnHoldSourceRead($source);
    }

    public function getSource()
    {
        return (!$this->source) ?: $this->source->value();
    }

    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $useAlternateSourceForInternalCalls and $this->useAlternateSourceForInternalCalls = new xs:boolean($useAlternateSourceForInternalCalls);
    }

    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->value();
    }

    public function setInternalSource($internalSource)
    {
        $internalSource and $this->internalSource = new MusicOnHoldSourceRead($internalSource);
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
