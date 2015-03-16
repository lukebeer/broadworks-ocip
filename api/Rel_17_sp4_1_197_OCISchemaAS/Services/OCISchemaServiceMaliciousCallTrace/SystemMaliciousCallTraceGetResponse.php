<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemMaliciousCallTraceGetRequest.
 *         The response contains the Malicious Call Trace system parameters and the list of users
 *         that use the Malicious Call Trace feature.
 * 
 *         The column headings are "Service Provider Id",
 *         "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Trace Type", "Status",
 *         "Hiragana Last Name" and "Hiragana First Name".
 */
class SystemMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemMaliciousCallTraceGetResponse';
    protected $playMCTWarningAnnouncement;
    protected $userTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\SystemMaliciousCallTraceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement = null)
    {
        $this->playMCTWarningAnnouncement = new PrimitiveType($playMCTWarningAnnouncement);
        $this->playMCTWarningAnnouncement->setName('playMCTWarningAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $playMCTWarningAnnouncement
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return ($this->playMCTWarningAnnouncement) ? $this->playMCTWarningAnnouncement->getValue() : null;
    }

    /**
     * 
     */
    public function setUserTable(TableType $userTable = null)
    {
        $this->userTable = $userTable;
        $this->userTable->setName('userTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserTable()
    {
        return $this->userTable;
    }
}
