<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAuthorizationCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes
 *         assigned to the user.
 */
class UserCommunicationBarringAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserCommunicationBarringAuthorizationCodeGetListResponse';
    public    $name = __CLASS__;
    protected $code = null;


    /**
     * Communication Barring Authorization Code entry.
     */
    public function setCode(CommunicationBarringAuthorizationCodeEntry $code = null)
    {
        $this->code = CommunicationBarringAuthorizationCodeEntry $code;
    }

    /**
     * Communication Barring Authorization Code entry.
     */
    public function getCode()
    {
        return (!$this->code) ?: $this->code->getValue();
    }
}
