<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemFeatureAccessCodeGetListRequest.
 */
class SystemFeatureAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemFeatureAccessCodeGetListResponse';
    protected $featureAccessCode;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFeatureAccessCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = ($featureAccessCode InstanceOf FeatureAccessCodeEntry)
             ? $featureAccessCode
             : new FeatureAccessCodeEntry($featureAccessCode);
        $this->featureAccessCode->setName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry $featureAccessCode
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
