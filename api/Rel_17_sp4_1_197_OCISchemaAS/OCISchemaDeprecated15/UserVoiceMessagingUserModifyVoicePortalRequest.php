<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         Replaced By: UserVoiceMessagingUserModifyVoicePortalRequest16
 */
class UserVoiceMessagingUserModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'UserVoiceMessagingUserModifyVoicePortalRequest';
    protected $userId                    = null;
    protected $usePersonalizedName       = null;
    protected $voicePortalAutoLogin      = null;
    protected $personalizedNameAudioFile = null;

    public function __construct(
         $userId,
         $usePersonalizedName = null,
         $voicePortalAutoLogin = null,
         LabeledFileResource $personalizedNameAudioFile = null
    ) {
        $this->setUserId($userId);
        $this->setUsePersonalizedName($usePersonalizedName);
        $this->setVoicePortalAutoLogin($voicePortalAutoLogin);
        $this->setPersonalizedNameAudioFile($personalizedNameAudioFile);
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUsePersonalizedName($usePersonalizedName = null)
    {
        if (!$usePersonalizedName) return $this;
        $this->usePersonalizedName = new PrimitiveType($usePersonalizedName);
        $this->usePersonalizedName->setName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return boolean $usePersonalizedName
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        if (!$voicePortalAutoLogin) return $this;
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $voicePortalAutoLogin
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFile(LabeledFileResource $personalizedNameAudioFile = null)
    {
        if (!$personalizedNameAudioFile) return $this;
        $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        $this->personalizedNameAudioFile->setName('personalizedNameAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $personalizedNameAudioFile
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile;
    }
}
