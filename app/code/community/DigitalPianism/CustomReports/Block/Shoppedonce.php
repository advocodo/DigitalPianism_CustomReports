<?php/** * Class DigitalPianism_CustomReports_Block_Shoppedonce */class DigitalPianism_CustomReports_Block_Shoppedonce extends DigitalPianism_CustomReports_Block_Customreport{    /**     *     */    public function __construct()    {        parent::__construct();        $this->setTemplate('digitalpianism/customreports/grid.phtml');		$this->setTitle('Custom Shopped Once And Never Again Report');    }    /**     * @return $this     */    public function _beforeToHtml()    {        $this->setChild('grid', $this->getLayout()->createBlock('customreports/shoppedonce_grid', 'customreports.grid'));        return $this;    }}