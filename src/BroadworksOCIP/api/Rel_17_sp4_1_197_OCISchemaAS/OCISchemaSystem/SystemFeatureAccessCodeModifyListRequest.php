<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify default Feature Access Codes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemFeatureAccessCodeModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFeatureAccessCodeModifyListRequest';
    protected $featureAccessCode;

    public function __construct(
         $featureAccessCode = null
    ) {
        $this->setFeatureAccessCode($featureAccessCode);
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
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = ($featureAccessCode InstanceOf FeatureAccessCodeEntry)
             ? $featureAccessCode
             : new FeatureAccessCodeEntry($featureAccessCode);
        $this->featureAccessCode->setElementName('featureAccessCode');
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
