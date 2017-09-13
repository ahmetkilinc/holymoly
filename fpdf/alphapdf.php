<?php
require('fpdf.php');

class AlphaPDF extends FPDF{
	
    var $extgstates = array();

    function SetAlpha($alpha, $bm='Normal'){
		
        $gs = $this->AddExtGState(array('ca'=>$alpha, 'CA'=>$alpha, 'BM'=>'/'.$bm));
        $this->SetExtGState($gs);
    }

    function AddExtGState($parms){
		
        $n = count($this->extgstates)+1;
        $this->extgstates[$n]['parms'] = $parms;
        return $n;
    }

    function SetExtGState($gs){
		
        $this->_out(sprintf('/GS%d gs', $gs));
    }

    function _enddoc(){
		
        if(!empty($this->extgstates) && $this->PDFVersion<'1.4')
            $this->PDFVersion='1.4';
        parent::_enddoc();
    }

    function _putextgstates(){
		
        for ($i = 1; $i <= count($this->extgstates); $i++){
			
            $this->_newobj();
            $this->extgstates[$i]['n'] = $this->n;
            $this->_out('<</Type /ExtGState');
            $parms = $this->extgstates[$i]['parms'];
            $this->_out(sprintf('/ca %.3F', $parms['ca']));
            $this->_out(sprintf('/CA %.3F', $parms['CA']));
            $this->_out('/BM '.$parms['BM']);
            $this->_out('>>');
            $this->_out('endobj');
        }
    }

    function _putresourcedict(){
		
        parent::_putresourcedict();
        $this->_out('/ExtGState <<');
        foreach($this->extgstates as $k=>$extgstate)
            $this->_out('/GS'.$k.' '.$extgstate['n'].' 0 R');
        $this->_out('>>');
    }

    function _putresources(){
		
        $this->_putextgstates();
        parent::_putresources();
    }
	
	function Footer(){
		
        // Her sayfanın en aşağısından 1.5 santim yukarı çık
        $this->SetY(-15);
        // Fontu ayarla
        $this->SetFont('arial','B',9);
        // sayfa numarasını ortalayarak yerleştir.
        $this->Cell(0,10, iconv('utf-8', 'ISO-8859-9', '').$this->PageNo(),0,0,'C');
    }
}
?>