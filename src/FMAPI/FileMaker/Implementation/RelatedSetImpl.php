<?php
class FileMaker_RelatedSet_Implementation
{
    public $_layout;
    public $_fm;
    public $_name;
    public $_fields = array();
    public function __construct(&$Vc6140495)
    {
        $this->_layout = &$Vc6140495;
        $this->_fm = &$Vc6140495->_impl->_fm;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function listFields()
    {
        return array_keys($this->_fields);
    }
    public function &getField($V972bf3f0)
    {
        if (isset($this->_fields[$V972bf3f0])) {
            return $this->_fields[$V972bf3f0];
        }
        $Vcb5e100e = new FileMaker_Error($this->_fm, 'Field Not Found');
        return $Vcb5e100e;
    }
    public function &getFields()
    {
        return $this->_fields;
    }
    public function loadExtendedInfo()
    {
        return new FileMaker_Error($this->_fm, 'Related sets do not support extended information.');
    }
}
