<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAttendantConsoleGetRequest14sp2.
 *         Returns a 5 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class UserAttendantConsoleGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAttendantConsoleGetResponse14sp2';
    protected $launchOnLogin;
    protected $allowUserConfigCallDetails;
    protected $allowUserViewCallDetails;
    protected $displayColumn;
    protected $monitoredUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\UserAttendantConsoleGetResponse14sp2 $response
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
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setElementName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $launchOnLogin
     */
    public function getLaunchOnLogin()
    {
        return ($this->launchOnLogin)
            ? $this->launchOnLogin->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        $this->allowUserConfigCallDetails = new PrimitiveType($allowUserConfigCallDetails);
        $this->allowUserConfigCallDetails->setElementName('allowUserConfigCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserConfigCallDetails
     */
    public function getAllowUserConfigCallDetails()
    {
        return ($this->allowUserConfigCallDetails)
            ? $this->allowUserConfigCallDetails->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        $this->allowUserViewCallDetails = new PrimitiveType($allowUserViewCallDetails);
        $this->allowUserViewCallDetails->setElementName('allowUserViewCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserViewCallDetails
     */
    public function getAllowUserViewCallDetails()
    {
        return ($this->allowUserViewCallDetails)
            ? $this->allowUserViewCallDetails->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisplayColumn($displayColumn = null)
    {
        $this->displayColumn = ($displayColumn InstanceOf AttendantConsoleDisplayColumn)
             ? $displayColumn
             : new AttendantConsoleDisplayColumn($displayColumn);
        $this->displayColumn->setElementName('displayColumn');
        return $this;
    }

    /**
     * 
     * @return AttendantConsoleDisplayColumn $displayColumn
     */
    public function getDisplayColumn()
    {
        return ($this->displayColumn)
            ? $this->displayColumn->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMonitoredUserTable(TableType $monitoredUserTable = null)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        $this->monitoredUserTable->setElementName('monitoredUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable;
    }
}
