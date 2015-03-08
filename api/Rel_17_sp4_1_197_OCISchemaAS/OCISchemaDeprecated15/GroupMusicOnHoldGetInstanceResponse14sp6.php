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
    public    $name                               = __CLASS__;
    protected $serviceUserId                      = null;
    protected $isActiveDuringCallHold             = null;
    protected $isActiveDuringCallPark             = null;
    protected $isActiveDuringBusyCampOn           = null;
    protected $enableVideo                        = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;


    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        $this->isActiveDuringCallHold = (boolean) $isActiveDuringCallHold;
    }

    /**
     * 
     */
    public function getIsActiveDuringCallHold()
    {
        return (!$this->isActiveDuringCallHold) ?: $this->isActiveDuringCallHold->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        $this->isActiveDuringCallPark = (boolean) $isActiveDuringCallPark;
    }

    /**
     * 
     */
    public function getIsActiveDuringCallPark()
    {
        return (!$this->isActiveDuringCallPark) ?: $this->isActiveDuringCallPark->getValue();
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        $this->isActiveDuringBusyCampOn = (boolean) $isActiveDuringBusyCampOn;
    }

    /**
     * 
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return (!$this->isActiveDuringBusyCampOn) ?: $this->isActiveDuringBusyCampOn->getValue();
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = (boolean) $enableVideo;
    }

    /**
     * 
     */
    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->getValue();
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setSource(MusicOnHoldSourceRead $source = null)
    {
        $this->source =  $source;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getSource()
    {
        return (!$this->source) ?: $this->source->getValue();
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        $this->useAlternateSourceForInternalCalls = (boolean) $useAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return (!$this->useAlternateSourceForInternalCalls) ?: $this->useAlternateSourceForInternalCalls->getValue();
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function setInternalSource(MusicOnHoldSourceRead $internalSource = null)
    {
        $this->internalSource =  $internalSource;
    }

    /**
     * Contains the music on hold source configuration.
     */
    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->getValue();
    }
}
