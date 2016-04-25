<?php
require_once dirname(__FILE__) . '/../CommandImpl.php';
class FileMaker_Command_FindRequest_Implementation
{
    public $_findCriteria = array();

    public $_omit;
    public function __construct()
    {
        $this->_omit = false;
    }

    public function addFindCriterion($Vd1148ee8, $Ve9de89b0)
    {
        $this->_findCriteria[$Vd1148ee8] = $Ve9de89b0;
    }
    public function setOmit($V2063c160)
    {
        $this->_omit = $V2063c160;
    }

    public function clearFindCriteria()
    {
        $this->_findCriteria = array();
    }
}
