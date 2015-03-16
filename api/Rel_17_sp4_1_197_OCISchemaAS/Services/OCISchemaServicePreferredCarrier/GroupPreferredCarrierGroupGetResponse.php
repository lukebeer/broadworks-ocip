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
    public    $name = 'GroupPreferredCarrierGroupGetResponse';
    protected $intraLataCarrier;
    protected $interLataCarrier;
    protected $internationalCarrier;

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
        $this->intraLataCarrier = ($intraLataCarrier InstanceOf GroupPreferredCarrierName)
             ? $intraLataCarrier
             : new GroupPreferredCarrierName($intraLataCarrier);
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
        $this->interLataCarrier = ($interLataCarrier InstanceOf GroupPreferredCarrierName)
             ? $interLataCarrier
             : new GroupPreferredCarrierName($interLataCarrier);
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
        $this->internationalCarrier = ($internationalCarrier InstanceOf GroupPreferredCarrierName)
             ? $internationalCarrier
             : new GroupPreferredCarrierName($internationalCarrier);
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
