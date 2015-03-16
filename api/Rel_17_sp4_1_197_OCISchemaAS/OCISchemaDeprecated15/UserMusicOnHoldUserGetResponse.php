<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldUserSourceRead;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMusicOnHoldUserGetRequest.
 *         Replaced By: UserMusicOnHoldUserGetResponse16
 */
class UserMusicOnHoldUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMusicOnHoldUserGetResponse';
    protected $enableVideo;
    protected $source;
    protected $useAlternateSourceForInternalCalls;
    protected $internalSource;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserMusicOnHoldUserGetResponse $response
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
        return ($this->enableVideo) ? $this->enableVideo->getValue() : null;
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceRead $source = null)
    {
        $this->source = ($source InstanceOf MusicOnHoldUserSourceRead)
             ? $source
             : new MusicOnHoldUserSourceRead($source);
        $this->source->setName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceRead $source
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
        return ($this->useAlternateSourceForInternalCalls) ? $this->useAlternateSourceForInternalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldUserSourceRead $internalSource = null)
    {
        $this->internalSource = ($internalSource InstanceOf MusicOnHoldUserSourceRead)
             ? $internalSource
             : new MusicOnHoldUserSourceRead($internalSource);
        $this->internalSource->setName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceRead $internalSource
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}
