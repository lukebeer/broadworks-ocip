<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
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
 */
class UserVoiceMessagingUserModifyVoicePortalRequest16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserModifyVoicePortalRequest16';
    protected $userId;
    protected $usePersonalizedName;
    protected $voicePortalAutoLogin;
    protected $personalizedNameAudioFile;

    public function __construct(
         $userId = '',
         $usePersonalizedName = null,
         $voicePortalAutoLogin = null,
         $personalizedNameAudioFile = null
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
    public function setUsePersonalizedName($usePersonalizedName = null)
    {
        $this->usePersonalizedName = new PrimitiveType($usePersonalizedName);
        $this->usePersonalizedName->setElementName('usePersonalizedName');
        return $this;
    }

    /**
     * 
     * @return boolean $usePersonalizedName
     */
    public function getUsePersonalizedName()
    {
        return ($this->usePersonalizedName)
            ? $this->usePersonalizedName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin = null)
    {
        $this->voicePortalAutoLogin = new PrimitiveType($voicePortalAutoLogin);
        $this->voicePortalAutoLogin->setElementName('voicePortalAutoLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $voicePortalAutoLogin
     */
    public function getVoicePortalAutoLogin()
    {
        return ($this->voicePortalAutoLogin)
            ? $this->voicePortalAutoLogin->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameAudioFile(LabeledMediaFileResource $personalizedNameAudioFile = null)
    {
        $this->personalizedNameAudioFile = ($personalizedNameAudioFile InstanceOf LabeledMediaFileResource)
             ? $personalizedNameAudioFile
             : new LabeledMediaFileResource($personalizedNameAudioFile);
        $this->personalizedNameAudioFile->setElementName('personalizedNameAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $personalizedNameAudioFile
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile;
    }
}
