<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldUserSourceRead16;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMusicOnHoldUserGetRequest16.
 */
class UserMusicOnHoldUserGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'UserMusicOnHoldUserGetResponse16';
    protected $enableVideo                        = null;
    protected $source                             = null;
    protected $useAlternateSourceForInternalCalls = null;
    protected $internalSource                     = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\UserMusicOnHoldUserGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        if (!$enableVideo) return $this;
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return $this->enableVideo->getValue();
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceRead16 $source = null)
    {
        if (!$source) return $this;
        $this->source = $source;
        $this->source->setName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceRead16 $source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls = null)
    {
        if (!$useAlternateSourceForInternalCalls) return $this;
        $this->useAlternateSourceForInternalCalls = new PrimitiveType($useAlternateSourceForInternalCalls);
        $this->useAlternateSourceForInternalCalls->setName('useAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useAlternateSourceForInternalCalls
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldUserSourceRead16 $internalSource = null)
    {
        if (!$internalSource) return $this;
        $this->internalSource = $internalSource;
        $this->internalSource->setName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceRead16 $internalSource
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}
