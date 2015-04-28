<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldUserSourceRead;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserMusicOnHoldUserGetRequest.
 *         Replaced By: UserMusicOnHoldUserGetResponse16
 */
class UserMusicOnHoldUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMusicOnHoldUserGetResponse';
    protected $enableVideo;
    protected $source;
    protected $useAlternateSourceForInternalCalls;
    protected $internalSource;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserMusicOnHoldUserGetResponse $response
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
        $this->enableVideo->setElementName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo)
            ? $this->enableVideo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceRead $source = null)
    {
        $this->source = ($source InstanceOf MusicOnHoldUserSourceRead)
             ? $source
             : new MusicOnHoldUserSourceRead($source);
        $this->source->setElementName('source');
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
        $this->useAlternateSourceForInternalCalls->setElementName('useAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useAlternateSourceForInternalCalls
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return ($this->useAlternateSourceForInternalCalls)
            ? $this->useAlternateSourceForInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternalSource(MusicOnHoldUserSourceRead $internalSource = null)
    {
        $this->internalSource = ($internalSource InstanceOf MusicOnHoldUserSourceRead)
             ? $internalSource
             : new MusicOnHoldUserSourceRead($internalSource);
        $this->internalSource->setElementName('internalSource');
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
