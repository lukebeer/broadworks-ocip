<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan initiating call forwards/transfer permissions.
 */
class OutgoingCallingPlanRedirectingPermissions extends ComplexType implements ComplexInterface
{
    public    $name = 'OutgoingCallingPlanRedirectingPermissions';
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
        $this->group->setName('group');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $group
     */
    public function getGroup()
    {
        return ($this->group) ? $this->group->getValue() : null;
    }

    /**
     * 
     */
    public function setLocal($local = null)
    {
        $this->local = new SimpleContent($local);
        $this->local->setName('local');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $local
     */
    public function getLocal()
    {
        return ($this->local) ? $this->local->getValue() : null;
    }

    /**
     * 
     */
    public function setTollFree($tollFree = null)
    {
        $this->tollFree = new SimpleContent($tollFree);
        $this->tollFree->setName('tollFree');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tollFree
     */
    public function getTollFree()
    {
        return ($this->tollFree) ? $this->tollFree->getValue() : null;
    }

    /**
     * 
     */
    public function setToll($toll = null)
    {
        $this->toll = new SimpleContent($toll);
        $this->toll->setName('toll');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $toll
     */
    public function getToll()
    {
        return ($this->toll) ? $this->toll->getValue() : null;
    }

    /**
     * 
     */
    public function setInternational($international = null)
    {
        $this->international = new SimpleContent($international);
        $this->international->setName('international');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $international
     */
    public function getInternational()
    {
        return ($this->international) ? $this->international->getValue() : null;
    }

    /**
     * 
     */
    public function setOperatorAssisted($operatorAssisted = null)
    {
        $this->operatorAssisted = new SimpleContent($operatorAssisted);
        $this->operatorAssisted->setName('operatorAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $operatorAssisted
     */
    public function getOperatorAssisted()
    {
        return ($this->operatorAssisted) ? $this->operatorAssisted->getValue() : null;
    }

    /**
     * 
     */
    public function setChargeableDirectoryAssisted($chargeableDirectoryAssisted = null)
    {
        $this->chargeableDirectoryAssisted = new SimpleContent($chargeableDirectoryAssisted);
        $this->chargeableDirectoryAssisted->setName('chargeableDirectoryAssisted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $chargeableDirectoryAssisted
     */
    public function getChargeableDirectoryAssisted()
    {
        return ($this->chargeableDirectoryAssisted) ? $this->chargeableDirectoryAssisted->getValue() : null;
    }

    /**
     * 
     */
    public function setSpecialServicesI($specialServicesI = null)
    {
        $this->specialServicesI = new SimpleContent($specialServicesI);
        $this->specialServicesI->setName('specialServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesI
     */
    public function getSpecialServicesI()
    {
        return ($this->specialServicesI) ? $this->specialServicesI->getValue() : null;
    }

    /**
     * 
     */
    public function setSpecialServicesII($specialServicesII = null)
    {
        $this->specialServicesII = new SimpleContent($specialServicesII);
        $this->specialServicesII->setName('specialServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $specialServicesII
     */
    public function getSpecialServicesII()
    {
        return ($this->specialServicesII) ? $this->specialServicesII->getValue() : null;
    }

    /**
     * 
     */
    public function setPremiumServicesI($premiumServicesI = null)
    {
        $this->premiumServicesI = new SimpleContent($premiumServicesI);
        $this->premiumServicesI->setName('premiumServicesI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesI
     */
    public function getPremiumServicesI()
    {
        return ($this->premiumServicesI) ? $this->premiumServicesI->getValue() : null;
    }

    /**
     * 
     */
    public function setPremiumServicesII($premiumServicesII = null)
    {
        $this->premiumServicesII = new SimpleContent($premiumServicesII);
        $this->premiumServicesII->setName('premiumServicesII');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $premiumServicesII
     */
    public function getPremiumServicesII()
    {
        return ($this->premiumServicesII) ? $this->premiumServicesII->getValue() : null;
    }

    /**
     * 
     */
    public function setCasual($casual = null)
    {
        $this->casual = new SimpleContent($casual);
        $this->casual->setName('casual');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $casual
     */
    public function getCasual()
    {
        return ($this->casual) ? $this->casual->getValue() : null;
    }

    /**
     * 
     */
    public function setUrlDialing($urlDialing = null)
    {
        $this->urlDialing = new SimpleContent($urlDialing);
        $this->urlDialing->setName('urlDialing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $urlDialing
     */
    public function getUrlDialing()
    {
        return ($this->urlDialing) ? $this->urlDialing->getValue() : null;
    }

    /**
     * 
     */
    public function setUnknown($unknown = null)
    {
        $this->unknown = new SimpleContent($unknown);
        $this->unknown->setName('unknown');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $unknown
     */
    public function getUnknown()
    {
        return ($this->unknown) ? $this->unknown->getValue() : null;
    }
}
