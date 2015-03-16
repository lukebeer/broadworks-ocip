<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains list of urls
 */
class CallCenterAnnouncementURLList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAnnouncementURLList';
    protected $url1;
    protected $url2;
    protected $url3;
    protected $url4;

    public function __construct(
         $url1 = null,
         $url2 = null,
         $url3 = null,
         $url4 = null
    ) {
        $this->setUrl1($url1);
        $this->setUrl2($url2);
        $this->setUrl3($url3);
        $this->setUrl4($url4);
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
    public function setUrl1($url1 = null)
    {
        $this->url1 = new SimpleContent($url1);
        $this->url1->setElementName('url1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $url1
     */
    public function getUrl1()
    {
        return ($this->url1)
            ? $this->url1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUrl2($url2 = null)
    {
        $this->url2 = new SimpleContent($url2);
        $this->url2->setElementName('url2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $url2
     */
    public function getUrl2()
    {
        return ($this->url2)
            ? $this->url2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUrl3($url3 = null)
    {
        $this->url3 = new SimpleContent($url3);
        $this->url3->setElementName('url3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $url3
     */
    public function getUrl3()
    {
        return ($this->url3)
            ? $this->url3->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUrl4($url4 = null)
    {
        $this->url4 = new SimpleContent($url4);
        $this->url4->setElementName('url4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $url4
     */
    public function getUrl4()
    {
        return ($this->url4)
            ? $this->url4->getElementValue()
            : null;
    }
}
