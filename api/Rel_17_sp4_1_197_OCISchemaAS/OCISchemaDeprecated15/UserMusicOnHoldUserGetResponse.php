<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldUserSourceRead;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserMusicOnHoldUserGetRequest.
 *         Replaced By: UserMusicOnHoldUserGetResponse16
 */
class UserMusicOnHoldUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableVideo,
             $source,
             $useAlternateSourceForInternalCalls,
             $internalSource=null
    ) {
        $this->enableVideo                        = $enableVideo;
        $this->source                             = $source;
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        $this->internalSource                     = $internalSource;
        $this->args                               = func_get_args();
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
        $source and $this->source = new MusicOnHoldUserSourceRead($source);
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
        $internalSource and $this->internalSource = new MusicOnHoldUserSourceRead($internalSource);
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
