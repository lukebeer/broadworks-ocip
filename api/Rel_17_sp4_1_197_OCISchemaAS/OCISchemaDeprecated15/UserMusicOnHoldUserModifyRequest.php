<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MusicOnHoldUserSourceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *         Replaced By: UserMusicOnHoldUserModifyRequest16
 */
class UserMusicOnHoldUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $userId                              = null;
    protected $source                              = null;
    protected $useAlternateSourceForInternalCalls  = null;
    protected $internalSource                      = null;

    public function __construct(
         $userId,
         MusicOnHoldUserSourceModify $source = null,
         $useAlternateSourceForInternalCalls = null,
         MusicOnHoldUserSourceModify $internalSource = null
    ) {
        $this->setUserId($userId);
        $this->setSource($source);
        $this->setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls);
        $this->setInternalSource($internalSource);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSource(MusicOnHoldUserSourceModify $source = null)
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

    public function setInternalSource(MusicOnHoldUserSourceModify $internalSource = null)
    {
    }

    public function getInternalSource()
    {
        return (!$this->internalSource) ?: $this->internalSource->value();
    }
}
