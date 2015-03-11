<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetDNISAnnouncementResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a call center's DNIS Annoucements
 *         The response is either a GroupCallCenterGetDNISAnnouncementRequest or an ErrorResponse.
 */
class GroupCallCenterGetDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetDNISAnnouncementResponse';
    public    $name    = 'GroupCallCenterGetDNISAnnouncementRequest';
    protected $dnisKey = null;

    public function __construct(
         DNISKey $dnisKey
    ) {
        $this->setDnisKey($dnisKey);
    }

    /**
     * @return GroupCallCenterGetDNISAnnouncementResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        if (!$dnisKey) return $this;
        $this->dnisKey = $dnisKey;
        $this->dnisKey->setName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }
}
