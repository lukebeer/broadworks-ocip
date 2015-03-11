<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerInformationFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerCertificateFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the BroadWorks Mobile Manager settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'EnterpriseBroadWorksMobileManagerModifyRequest';
    protected $serviceProviderId            = null;
    protected $informationFile              = null;
    protected $certificateFile              = null;
    protected $localToCarrier               = null;
    protected $maxTxPerSecondEnabled        = null;
    protected $maxTxPerSecond               = null;
    protected $tldnEnabled                  = null;
    protected $genericNumberEnabled         = null;
    protected $mobileStateCheckEnabled      = null;
    protected $locationBasedServicesEnabled = null;

    public function __construct(
         $serviceProviderId,
         $informationFile = null,
         $certificateFile = null,
         $localToCarrier = null,
         $maxTxPerSecondEnabled = null,
         $maxTxPerSecond = null,
         $tldnEnabled = null,
         $genericNumberEnabled = null,
         $mobileStateCheckEnabled = null,
         $locationBasedServicesEnabled = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setInformationFile($informationFile);
        $this->setCertificateFile($certificateFile);
        $this->setLocalToCarrier($localToCarrier);
        $this->setMaxTxPerSecondEnabled($maxTxPerSecondEnabled);
        $this->setMaxTxPerSecond($maxTxPerSecond);
        $this->setTldnEnabled($tldnEnabled);
        $this->setGenericNumberEnabled($genericNumberEnabled);
        $this->setMobileStateCheckEnabled($mobileStateCheckEnabled);
        $this->setLocationBasedServicesEnabled($locationBasedServicesEnabled);
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
    public function setInformationFile($informationFile = null)
    {
        if (!$informationFile) return $this;
        $this->informationFile = ($informationFile InstanceOf BroadWorksMobileManagerInformationFile)
             ? $informationFile
             : new BroadWorksMobileManagerInformationFile($informationFile);
        $this->informationFile->setName('informationFile');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerInformationFile
     */
    public function getInformationFile()
    {
        return $this->informationFile->getValue();
    }

    /**
     * 
     */
    public function setCertificateFile($certificateFile = null)
    {
        if (!$certificateFile) return $this;
        $this->certificateFile = ($certificateFile InstanceOf BroadWorksMobileManagerCertificateFile)
             ? $certificateFile
             : new BroadWorksMobileManagerCertificateFile($certificateFile);
        $this->certificateFile->setName('certificateFile');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerCertificateFile
     */
    public function getCertificateFile()
    {
        return $this->certificateFile->getValue();
    }

    /**
     * 
     */
    public function setLocalToCarrier($localToCarrier = null)
    {
        if (!$localToCarrier) return $this;
        $this->localToCarrier = new PrimitiveType($localToCarrier);
        $this->localToCarrier->setName('localToCarrier');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLocalToCarrier()
    {
        return $this->localToCarrier->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled = null)
    {
        if (!$maxTxPerSecondEnabled) return $this;
        $this->maxTxPerSecondEnabled = new PrimitiveType($maxTxPerSecondEnabled);
        $this->maxTxPerSecondEnabled->setName('maxTxPerSecondEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMaxTxPerSecondEnabled()
    {
        return $this->maxTxPerSecondEnabled->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        if (!$maxTxPerSecond) return $this;
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
        $this->maxTxPerSecond->setName('maxTxPerSecond');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerMaxTxPerSecond
     */
    public function getMaxTxPerSecond()
    {
        return $this->maxTxPerSecond->getValue();
    }

    /**
     * 
     */
    public function setTldnEnabled($tldnEnabled = null)
    {
        if (!$tldnEnabled) return $this;
        $this->tldnEnabled = new PrimitiveType($tldnEnabled);
        $this->tldnEnabled->setName('tldnEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getTldnEnabled()
    {
        return $this->tldnEnabled->getValue();
    }

    /**
     * 
     */
    public function setGenericNumberEnabled($genericNumberEnabled = null)
    {
        if (!$genericNumberEnabled) return $this;
        $this->genericNumberEnabled = new PrimitiveType($genericNumberEnabled);
        $this->genericNumberEnabled->setName('genericNumberEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getGenericNumberEnabled()
    {
        return $this->genericNumberEnabled->getValue();
    }

    /**
     * 
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled = null)
    {
        if (!$mobileStateCheckEnabled) return $this;
        $this->mobileStateCheckEnabled = new PrimitiveType($mobileStateCheckEnabled);
        $this->mobileStateCheckEnabled->setName('mobileStateCheckEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMobileStateCheckEnabled()
    {
        return $this->mobileStateCheckEnabled->getValue();
    }

    /**
     * 
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled = null)
    {
        if (!$locationBasedServicesEnabled) return $this;
        $this->locationBasedServicesEnabled = new PrimitiveType($locationBasedServicesEnabled);
        $this->locationBasedServicesEnabled->setName('locationBasedServicesEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLocationBasedServicesEnabled()
    {
        return $this->locationBasedServicesEnabled->getValue();
    }
}
