<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldUserSourceRead16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserMusicOnHoldUserGetRequest16.
 */
class UserMusicOnHoldUserGetResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold\UserMusicOnHoldUserGetResponse16';
    public    $name                               = __CLASS__;
    protected $enableVideo                        = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;


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
     * Contains the music on hold user source configuration.
     */
    public function setSource(MusicOnHoldUserSourceRead16 $source = null)
    {
        $this->source = MusicOnHoldUserSourceRead16 $source;
    }

    /**
     * Contains the music on hold user source configuration.
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
     * Contains the music on hold user source configuration.
     */
    public function setInternalSource(MusicOnHoldUserSourceRead16 $internalSource = null)
    {
        $this->internalSource = MusicOnHoldUserSourceRead16 $internalSource;
    }

    /**
     * Contains the music on hold user source configuration.
     */
    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->getValue();
    }
}
