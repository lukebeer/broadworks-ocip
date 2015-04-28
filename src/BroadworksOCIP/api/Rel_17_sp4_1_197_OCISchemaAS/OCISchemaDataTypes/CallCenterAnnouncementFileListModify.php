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
 * Contains a list of audio or video files to modify.
 */
class CallCenterAnnouncementFileListModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterAnnouncementFileListModify';
    protected $file1;
    protected $file2;
    protected $file3;
    protected $file4;

    public function __construct(
         $file1 = null,
         $file2 = null,
         $file3 = null,
         $file4 = null
    ) {
        $this->setFile1($file1);
        $this->setFile2($file2);
        $this->setFile3($file3);
        $this->setFile4($file4);
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
    public function setFile1($file1 = null)
    {
        $this->file1 = new SimpleContent($file1);
        $this->file1->setElementName('file1');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file1
     */
    public function getFile1()
    {
        return ($this->file1)
            ? $this->file1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFile2($file2 = null)
    {
        $this->file2 = new SimpleContent($file2);
        $this->file2->setElementName('file2');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file2
     */
    public function getFile2()
    {
        return ($this->file2)
            ? $this->file2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFile3($file3 = null)
    {
        $this->file3 = new SimpleContent($file3);
        $this->file3->setElementName('file3');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file3
     */
    public function getFile3()
    {
        return ($this->file3)
            ? $this->file3->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFile4($file4 = null)
    {
        $this->file4 = new SimpleContent($file4);
        $this->file4->setElementName('file4');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $file4
     */
    public function getFile4()
    {
        return ($this->file4)
            ? $this->file4->getElementValue()
            : null;
    }
}
