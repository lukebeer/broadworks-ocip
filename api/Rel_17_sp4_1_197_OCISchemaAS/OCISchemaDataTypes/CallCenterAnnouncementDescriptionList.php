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
 * Contains list of file descriptions for audio or video files
 */
class CallCenterAnnouncementDescriptionList extends ComplexType implements ComplexInterface
{
    public    $name             = 'CallCenterAnnouncementDescriptionList';
    protected $fileDescription1 = null;
    protected $fileDescription2 = null;
    protected $fileDescription3 = null;
    protected $fileDescription4 = null;

    public function __construct(
         $fileDescription1 = null,
         $fileDescription2 = null,
         $fileDescription3 = null,
         $fileDescription4 = null
    ) {
        $this->setFileDescription1($fileDescription1);
        $this->setFileDescription2($fileDescription2);
        $this->setFileDescription3($fileDescription3);
        $this->setFileDescription4($fileDescription4);
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
    public function setFileDescription1($fileDescription1 = null)
    {
        if (!$fileDescription1) return $this;
        $this->fileDescription1 = new SimpleContent($fileDescription1);
        $this->fileDescription1->setName('fileDescription1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription1
     */
    public function getFileDescription1()
    {
        return $this->fileDescription1->getValue();
    }

    /**
     * 
     */
    public function setFileDescription2($fileDescription2 = null)
    {
        if (!$fileDescription2) return $this;
        $this->fileDescription2 = new SimpleContent($fileDescription2);
        $this->fileDescription2->setName('fileDescription2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription2
     */
    public function getFileDescription2()
    {
        return $this->fileDescription2->getValue();
    }

    /**
     * 
     */
    public function setFileDescription3($fileDescription3 = null)
    {
        if (!$fileDescription3) return $this;
        $this->fileDescription3 = new SimpleContent($fileDescription3);
        $this->fileDescription3->setName('fileDescription3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription3
     */
    public function getFileDescription3()
    {
        return $this->fileDescription3->getValue();
    }

    /**
     * 
     */
    public function setFileDescription4($fileDescription4 = null)
    {
        if (!$fileDescription4) return $this;
        $this->fileDescription4 = new SimpleContent($fileDescription4);
        $this->fileDescription4->setName('fileDescription4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription4
     */
    public function getFileDescription4()
    {
        return $this->fileDescription4->getValue();
    }
}
