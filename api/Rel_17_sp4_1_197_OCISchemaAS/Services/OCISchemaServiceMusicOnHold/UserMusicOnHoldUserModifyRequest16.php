<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldUserSourceModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 */
class UserMusicOnHoldUserModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMusicOnHoldUserModifyRequest16';
    protected $userId;
    protected $source;
    protected $useAlternateSourceForInternalCalls;
    protected $internalSource;

    public function __construct(
         $userId = '',
         MusicOnHoldUserSourceModify16 $source = null,
         $useAlternateSourceForInternalCalls = null,
         MusicOnHoldUserSourceModify16 $internalSource = null
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setSource(MusicOnHoldUserSourceModify16 $source = null)
    {
        $this->source = ($source InstanceOf MusicOnHoldUserSourceModify16)
             ? $source
             : new MusicOnHoldUserSourceModify16($source);
        $this->source->setName('source');
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
    public function setInternalSource(MusicOnHoldUserSourceModify16 $internalSource = null)
    {
        $this->internalSource = ($internalSource InstanceOf MusicOnHoldUserSourceModify16)
             ? $internalSource
             : new MusicOnHoldUserSourceModify16($internalSource);
        $this->internalSource->setName('internalSource');
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
