<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldUserSourceModify16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class UserMusicOnHoldUserModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMusicOnHoldUserModifyRequest16';
    protected $userId;
    protected $source;
    protected $useAlternateSourceForInternalCalls;
    protected $internalSource;

    public function __construct(
         $userId = '',
         $source = null,
         $useAlternateSourceForInternalCalls = null,
         $internalSource = null
    ) {
        $this->setUserId($userId);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceModify16 $source = null)
    {
        $this->source = ($source InstanceOf MusicOnHoldUserSourceModify16)
             ? $source
             : new MusicOnHoldUserSourceModify16($source);
        $this->source->setElementName('source');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceModify16 $source
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
    public function setInternalSource(MusicOnHoldUserSourceModify16 $internalSource = null)
    {
        $this->internalSource = ($internalSource InstanceOf MusicOnHoldUserSourceModify16)
             ? $internalSource
             : new MusicOnHoldUserSourceModify16($internalSource);
        $this->internalSource->setElementName('internalSource');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldUserSourceModify16 $internalSource
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }
}
