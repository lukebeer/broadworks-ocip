<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Service Provider level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialPlanPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'ServiceProviderDialPlanPolicyModifyRequest';
    protected $serviceProviderId                         = null;
    protected $requiresAccessCodeForPublicCalls          = null;
    protected $allowE164PublicCalls                      = null;
    protected $preferE164NumberFormatForCallbackServices = null;
    protected $publicDigitMap                            = null;
    protected $privateDigitMap                           = null;

    public function __construct(
         $serviceProviderId,
         $requiresAccessCodeForPublicCalls = null,
         $allowE164PublicCalls = null,
         $preferE164NumberFormatForCallbackServices = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls);
        $this->setAllowE164PublicCalls($allowE164PublicCalls);
        $this->setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls = null)
    {
        if (!$requiresAccessCodeForPublicCalls) return $this;
        $this->requiresAccessCodeForPublicCalls = new PrimitiveType($requiresAccessCodeForPublicCalls);
        $this->requiresAccessCodeForPublicCalls->setName('requiresAccessCodeForPublicCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return $this->requiresAccessCodeForPublicCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls = null)
    {
        if (!$allowE164PublicCalls) return $this;
        $this->allowE164PublicCalls = new PrimitiveType($allowE164PublicCalls);
        $this->allowE164PublicCalls->setName('allowE164PublicCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowE164PublicCalls()
    {
        return $this->allowE164PublicCalls->getValue();
    }

    /**
     * 
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices = null)
    {
        if (!$preferE164NumberFormatForCallbackServices) return $this;
        $this->preferE164NumberFormatForCallbackServices = new PrimitiveType($preferE164NumberFormatForCallbackServices);
        $this->preferE164NumberFormatForCallbackServices->setName('preferE164NumberFormatForCallbackServices');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return $this->preferE164NumberFormatForCallbackServices->getValue();
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if (!$publicDigitMap) return $this;
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap->getValue();
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if (!$privateDigitMap) return $this;
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap->getValue();
    }
}
