<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains list of file descriptions for audio or video files
 */
class CallCenterAnnouncementDescriptionList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAnnouncementDescriptionList';
    protected $fileDescription1;
    protected $fileDescription2;
    protected $fileDescription3;
    protected $fileDescription4;

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
        $this->fileDescription1 = new SimpleContent($fileDescription1);
        $this->fileDescription1->setElementName('fileDescription1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription1
     */
    public function getFileDescription1()
    {
        return ($this->fileDescription1)
            ? $this->fileDescription1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileDescription2($fileDescription2 = null)
    {
        $this->fileDescription2 = new SimpleContent($fileDescription2);
        $this->fileDescription2->setElementName('fileDescription2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription2
     */
    public function getFileDescription2()
    {
        return ($this->fileDescription2)
            ? $this->fileDescription2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileDescription3($fileDescription3 = null)
    {
        $this->fileDescription3 = new SimpleContent($fileDescription3);
        $this->fileDescription3->setElementName('fileDescription3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription3
     */
    public function getFileDescription3()
    {
        return ($this->fileDescription3)
            ? $this->fileDescription3->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileDescription4($fileDescription4 = null)
    {
        $this->fileDescription4 = new SimpleContent($fileDescription4);
        $this->fileDescription4->setElementName('fileDescription4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fileDescription4
     */
    public function getFileDescription4()
    {
        return ($this->fileDescription4)
            ? $this->fileDescription4->getElementValue()
            : null;
    }
}
