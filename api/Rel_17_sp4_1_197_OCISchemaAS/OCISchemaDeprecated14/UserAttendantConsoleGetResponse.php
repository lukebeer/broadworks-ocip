<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAttendantConsoleGetRequest.
 */
class UserAttendantConsoleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserAttendantConsoleGetResponse';
    protected $launchOnLogin              = null;
    protected $allowUserConfigCallDetails = null;
    protected $allowUserViewCallDetails   = null;
    protected $displayColumn              = null;

    /**
     * @return UserAttendantConsoleGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        if (!$launchOnLogin) return $this;
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin->getValue();
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        if (!$allowUserConfigCallDetails) return $this;
        $this->allowUserConfigCallDetails = new PrimitiveType($allowUserConfigCallDetails);
        $this->allowUserConfigCallDetails->setName('allowUserConfigCallDetails');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowUserConfigCallDetails()
    {
        return $this->allowUserConfigCallDetails->getValue();
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        if (!$allowUserViewCallDetails) return $this;
        $this->allowUserViewCallDetails = new PrimitiveType($allowUserViewCallDetails);
        $this->allowUserViewCallDetails->setName('allowUserViewCallDetails');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowUserViewCallDetails()
    {
        return $this->allowUserViewCallDetails->getValue();
    }

    /**
     * 
     */
    public function setDisplayColumn($displayColumn = null)
    {
        if (!$displayColumn) return $this;
        $this->displayColumn = ($displayColumn InstanceOf AttendantConsoleDisplayColumn)
             ? $displayColumn
             : new AttendantConsoleDisplayColumn($displayColumn);
        $this->displayColumn->setName('displayColumn');
        return $this;
    }

    /**
     * 
     * @return AttendantConsoleDisplayColumn
     */
    public function getDisplayColumn()
    {
        return $this->displayColumn->getValue();
    }
}
