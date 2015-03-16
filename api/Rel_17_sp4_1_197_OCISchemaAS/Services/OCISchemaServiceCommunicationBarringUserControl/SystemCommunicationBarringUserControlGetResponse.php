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
 * Response to the SystemCommunicationBarringUserControlGetRequest.
 *         Contains the settings to whole system for Communication Barring User-Control
 */
class SystemCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringUserControlGetResponse';
    protected $enableLockout;
    protected $maxNumberOfFailedAttempts;
    protected $lockoutMinutes;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\SystemCommunicationBarringUserControlGetResponse $response
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
        $this->enableLockout = new PrimitiveType($enableLockout);
        $this->enableLockout->setElementName('enableLockout');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLockout
     */
    public function getEnableLockout()
    {
        return ($this->enableLockout)
            ? $this->enableLockout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts = null)
    {
        $this->maxNumberOfFailedAttempts = ($maxNumberOfFailedAttempts InstanceOf CommunicationBarringUserControlNumberOfAttempts)
             ? $maxNumberOfFailedAttempts
             : new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
        $this->maxNumberOfFailedAttempts->setElementName('maxNumberOfFailedAttempts');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlNumberOfAttempts $maxNumberOfFailedAttempts
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return ($this->maxNumberOfFailedAttempts)
            ? $this->maxNumberOfFailedAttempts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLockoutMinutes($lockoutMinutes = null)
    {
        $this->lockoutMinutes = ($lockoutMinutes InstanceOf CommunicationBarringUserControlLockoutMinutes)
             ? $lockoutMinutes
             : new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
        $this->lockoutMinutes->setElementName('lockoutMinutes');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlLockoutMinutes $lockoutMinutes
     */
    public function getLockoutMinutes()
    {
        return ($this->lockoutMinutes)
            ? $this->lockoutMinutes->getElementValue()
            : null;
    }
}
