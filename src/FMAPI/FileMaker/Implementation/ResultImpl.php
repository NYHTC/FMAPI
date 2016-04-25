<?php
class FileMaker_Result_Implementation
{
    public $_fm;
    public $_layout;
    public $_records;
    public $_tableCount;
    public $_foundSetCount;
    public $_fetchCount;
    public function __construct(&$V0ab34ca9)
    {
        $this->_fm = &$V0ab34ca9;
    }
    public function &getLayout()
    {
        return $this->_layout;
    }
    public function &getRecords()
    {
        return $this->_records;
    }
    public function getFields()
    {
        return $this->_layout->listFields();
    }
    public function getRelatedSets()
    {
        return $this->_layout->listRelatedSets();
    }
    public function getTableRecordCount()
    {
        return $this->_tableCount;
    }
    public function getFoundSetCount()
    {
        return $this->_foundSetCount;
    }
    public function getFetchCount()
    {
        return $this->_fetchCount;
    }

    public function getFirstRecord()
    {
        return $this->_records[0];
    }

    public function getLastRecord()
    {
        return $this->_records[sizeof($this->_records) - 1];
    }
}
