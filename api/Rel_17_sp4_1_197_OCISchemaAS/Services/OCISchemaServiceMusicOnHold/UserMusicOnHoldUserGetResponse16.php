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
    public    $name                                = __CLASS__;
    protected $enableVideo                         = null;
    protected $source                              = null;
    protected $useAlternateSourceForInternalCalls  = null;
    protected $internalSource                      = null;


    public function setEnableVideo(xs:boolean $enableVideo = null)
    {
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setSource(MusicOnHoldUserSourceRead16 $source = null)
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

    public function setInternalSource(MusicOnHoldUserSourceRead16 $internalSource = null)
    {
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
