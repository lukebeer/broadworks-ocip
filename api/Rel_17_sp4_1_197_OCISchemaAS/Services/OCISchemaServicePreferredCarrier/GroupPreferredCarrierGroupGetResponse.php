<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a GroupPreferredCarrierGroupGetRequest.
 */
class GroupPreferredCarrierGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'GroupPreferredCarrierGroupGetResponse';
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierGroupGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIntraLataCarrier(GroupPreferredCarrierName $intraLataCarrier = null)
    {
        if (!$intraLataCarrier) return $this;
        $this->intraLataCarrier = $intraLataCarrier;
        $this->intraLataCarrier->setName('intraLataCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierName $intraLataCarrier
     */
    public function getIntraLataCarrier()
    {
        return $this->intraLataCarrier;
    }

    /**
     * 
     */
    public function setInterLataCarrier(GroupPreferredCarrierName $interLataCarrier = null)
    {
        if (!$interLataCarrier) return $this;
        $this->interLataCarrier = $interLataCarrier;
        $this->interLataCarrier->setName('interLataCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierName $interLataCarrier
     */
    public function getInterLataCarrier()
    {
        return $this->interLataCarrier;
    }

    /**
     * 
     */
    public function setInternationalCarrier(GroupPreferredCarrierName $internationalCarrier = null)
    {
        if (!$internationalCarrier) return $this;
        $this->internationalCarrier = $internationalCarrier;
        $this->internationalCarrier->setName('internationalCarrier');
        return $this;
    }

    /**
     * 
     * @return GroupPreferredCarrierName $internationalCarrier
     */
    public function getInternationalCarrier()
    {
        return $this->internationalCarrier;
    }
}
