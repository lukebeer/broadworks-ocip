<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains list of urls
 */
class CallCenterAnnouncementURLList extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList';
    public    $name = 'CallCenterAnnouncementURLList';
    protected $url1 = null;
    protected $url2 = null;
    protected $url3 = null;
    protected $url4 = null;

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
     * @return CallCenterAnnouncementURLList
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
        if (!$url1) return $this;
        $this->url1 = new SimpleContent($url1);
        $this->url1->setName('url1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUrl1()
    {
        return $this->url1->getValue();
    }

    /**
     * 
     */
    public function setUrl2($url2 = null)
    {
        if (!$url2) return $this;
        $this->url2 = new SimpleContent($url2);
        $this->url2->setName('url2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUrl2()
    {
        return $this->url2->getValue();
    }

    /**
     * 
     */
    public function setUrl3($url3 = null)
    {
        if (!$url3) return $this;
        $this->url3 = new SimpleContent($url3);
        $this->url3->setName('url3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUrl3()
    {
        return $this->url3->getValue();
    }

    /**
     * 
     */
    public function setUrl4($url4 = null)
    {
        if (!$url4) return $this;
        $this->url4 = new SimpleContent($url4);
        $this->url4->setName('url4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getUrl4()
    {
        return $this->url4->getValue();
    }
}
