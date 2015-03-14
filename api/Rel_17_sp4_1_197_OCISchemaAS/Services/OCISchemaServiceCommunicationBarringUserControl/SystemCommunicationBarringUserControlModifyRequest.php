<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlNumberOfAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlLockoutMinutes;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's Communication Barring User-Control settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'SystemCommunicationBarringUserControlModifyRequest';
    protected $enableLockout             = null;
    protected $maxNumberOfFailedAttempts = null;
    protected $lockoutMinutes            = null;

    public function __construct(
         $enableLockout = null,
         $maxNumberOfFailedAttempts = null,
         $lockoutMinutes = null
    ) {
        $this->setEnableLockout($enableLockout);
        $this->setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts);
        $this->setLockoutMinutes($lockoutMinutes);
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
    public function setEnableLockout($enableLockout = null)
    {
        if (!$enableLockout) return $this;
        $this->enableLockout = new PrimitiveType($enableLockout);
        $this->enableLockout->setName('enableLockout');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLockout
     */
    public function getEnableLockout()
    {
        return $this->enableLockout->getValue();
    }

    /**
     * 
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts = null)
    {
        if (!$maxNumberOfFailedAttempts) return $this;
        $this->maxNumberOfFailedAttempts = ($maxNumberOfFailedAttempts InstanceOf CommunicationBarringUserControlNumberOfAttempts)
             ? $maxNumberOfFailedAttempts
             : new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
        $this->maxNumberOfFailedAttempts->setName('maxNumberOfFailedAttempts');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlNumberOfAttempts $maxNumberOfFailedAttempts
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return $this->maxNumberOfFailedAttempts->getValue();
    }

    /**
     * 
     */
    public function setLockoutMinutes($lockoutMinutes = null)
    {
        if (!$lockoutMinutes) return $this;
        $this->lockoutMinutes = ($lockoutMinutes InstanceOf CommunicationBarringUserControlLockoutMinutes)
             ? $lockoutMinutes
             : new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
        $this->lockoutMinutes->setName('lockoutMinutes');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlLockoutMinutes $lockoutMinutes
     */
    public function getLockoutMinutes()
    {
        return $this->lockoutMinutes->getValue();
    }
}
