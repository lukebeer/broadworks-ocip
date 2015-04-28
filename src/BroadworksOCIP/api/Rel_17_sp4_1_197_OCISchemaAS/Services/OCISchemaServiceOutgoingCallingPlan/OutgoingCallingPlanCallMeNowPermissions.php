<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Outgoing Calling Plan for Call Me Now call permissions.
 */
class OutgoingCallingPlanCallMeNowPermissions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanCallMeNowPermissions';
    protected $group;
    protected $local;
    protected $tollFree;
    protected $toll;
    protected $international;
    protected $operatorAssisted;
    protected $chargeableDirectoryAssisted;
    protected $specialServicesI;
    protected $specialServicesII;
    protected $premiumServicesI;
    protected $premiumServicesII;
    protected $casual;
    protected $urlDialing;
    protected $unknown;

    public function __construct(
         $group = '',
         $local = '',
         $tollFree = '',
         $toll = '',
         $international = '',
         $operatorAssisted = '',
         $chargeableDirectoryAssisted = '',
         $specialServicesI = '',
         $specialServicesII = '',
         $premiumServicesI = '',
         $premiumServicesII = '',
         $casual = '',
         $urlDialing = '',
         $unknown = ''
    ) {
        $this->setGroup($group);
        $this->setLocal($local);
        $this->setTollFree($tollFree);
        $this->setToll($toll);
        $this->setInternational($international);
        $this->setOperatorAssisted($operatorAssisted);
        $this->setChargeableDirectoryAssisted($chargeableDirectoryAssisted);
        $this->setSpecialServicesI($specialServicesI);
        $this->setSpecialServicesII($specialServicesII);
        $this->setPremiumServicesI($premiumServicesI);
        $this->setPremiumServicesII($premiumServicesII);
        $this->setCasual($casual);
        $this->setUrlDialing($urlDialing);
        $this->setUnknown($unknown);
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
    public function setGroup($group = null)
    {
        $this->group = new SimpleContent($group);
        $this->group->setElementName('group');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $group
     */
    public function getGroup()
    {
        return ($this->group)
            ? $this->group->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocal($local = null)
    {
        $this->local = new SimpleContent($local);
        $this->local->setElementName('local');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $local
     */
    public function getLocal()
    {
        return ($this->local)
            ? $this->local->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTollFree($tollFree = null)
    {
        $this->tollFree = new SimpleContent($tollFree);
        $this->tollFree->setElementName('tollFree');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tollFree
     */
    public function getTollFree()
    {
        return ($this->tollFree)
            ? $this->tollFree->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setToll($toll = null)
    {
        $this->toll = new SimpleContent($toll);
        $this->toll->setElementName('toll');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $toll
     */
    public function getToll()
    {
        return ($this->toll)
            ? $this->toll->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternational($international = null)
    {
        $this->international = new SimpleContent($international);
        $this->international->setElementName('international');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $international
     */
    public function getInternational()
    {
        return ($this->international)
            ? $this->international->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOperatorAssisted($operatorAssisted = null)
    {
        $this->operatorAssisted = new SimpleContent($operatorAssisted);
        $this->operatorAssisted->setElementName('operatorAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $operatorAssisted
     */
    public function getOperatorAssisted()
    {
        return ($this->operatorAssisted)
            ? $this->operatorAssisted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChargeableDirectoryAssisted($chargeableDirectoryAssisted = null)
    {
        $this->chargeableDirectoryAssisted = new SimpleContent($chargeableDirectoryAssisted);
        $this->chargeableDirectoryAssisted->setElementName('chargeableDirectoryAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $chargeableDirectoryAssisted
     */
    public function getChargeableDirectoryAssisted()
    {
        return ($this->chargeableDirectoryAssisted)
            ? $this->chargeableDirectoryAssisted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSpecialServicesI($specialServicesI = null)
    {
        $this->specialServicesI = new SimpleContent($specialServicesI);
        $this->specialServicesI->setElementName('specialServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesI
     */
    public function getSpecialServicesI()
    {
        return ($this->specialServicesI)
            ? $this->specialServicesI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSpecialServicesII($specialServicesII = null)
    {
        $this->specialServicesII = new SimpleContent($specialServicesII);
        $this->specialServicesII->setElementName('specialServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesII
     */
    public function getSpecialServicesII()
    {
        return ($this->specialServicesII)
            ? $this->specialServicesII->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPremiumServicesI($premiumServicesI = null)
    {
        $this->premiumServicesI = new SimpleContent($premiumServicesI);
        $this->premiumServicesI->setElementName('premiumServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesI
     */
    public function getPremiumServicesI()
    {
        return ($this->premiumServicesI)
            ? $this->premiumServicesI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPremiumServicesII($premiumServicesII = null)
    {
        $this->premiumServicesII = new SimpleContent($premiumServicesII);
        $this->premiumServicesII->setElementName('premiumServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesII
     */
    public function getPremiumServicesII()
    {
        return ($this->premiumServicesII)
            ? $this->premiumServicesII->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCasual($casual = null)
    {
        $this->casual = new SimpleContent($casual);
        $this->casual->setElementName('casual');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $casual
     */
    public function getCasual()
    {
        return ($this->casual)
            ? $this->casual->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUrlDialing($urlDialing = null)
    {
        $this->urlDialing = new SimpleContent($urlDialing);
        $this->urlDialing->setElementName('urlDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $urlDialing
     */
    public function getUrlDialing()
    {
        return ($this->urlDialing)
            ? $this->urlDialing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnknown($unknown = null)
    {
        $this->unknown = new SimpleContent($unknown);
        $this->unknown->setElementName('unknown');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $unknown
     */
    public function getUnknown()
    {
        return ($this->unknown)
            ? $this->unknown->getElementValue()
            : null;
    }
}
