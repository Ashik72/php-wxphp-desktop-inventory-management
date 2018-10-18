<?php 

require_once "mpdf60".DIRECTORY_SEPARATOR."mpdf.php";

/**
* Generate PDF
*/
class csvGenerator extends mPDF
{
	
	function __construct($fileName = null)
	{
		parent::__construct('utf-8', 'A4-L');
		$this->setFooter('{PAGENO}');

		$this->fileName = $fileName;

		return;
	}

	function outputBrowser() {

		if (empty($this->fileName))
			$fileNameCSV = fileNameCSV;
		else
			$fileNameCSV = $this->fileName;


		$this->WriteHTML('TESTETST');

		$this->Output($fileNameCSV, 'F');

		if (file_exists(__DIR__.DIRECTORY_SEPARATOR.$fileNameCSV)) {

			wxLaunchDefaultBrowser(__DIR__.DIRECTORY_SEPARATOR.$fileNameCSV);

		}

		return;

	}


	function outputCSV($data = null) {

		if (empty($data))
			return;

		if (empty($this->fileName))
			$fileNameCSV = fileNameCSV;
		else
			$fileNameCSV = $this->fileName;


		foreach ($data as $key => $singleData) {

			$dataString[] = implode(",", $singleData);

			}

			if (empty($dataString))
				return;

			var_dump($dataString);

		//return;

		/*$list = array
		(
		"Peter,Griffin,Oslo,Norway",
		"Glenn,Quagmire,Oslo,Norway",
		);*/

		$list_titles = array ("SHOP CODE,BOOK NUMBER,Work Order Number,DATE,CUSTOMER NAME,Customer Address,Customer PHONE NUMBER,Description of GOODS,Quanity,Unit of Measurement,Rate,AMOUNT,ADV,Adv DATE,Product Delivered");

		$list = array_merge($list_titles, $dataString);

		var_dump($list);

		$file = fopen($fileNameCSV,"w");

		foreach ($list as $line)
		  {
		  fputcsv($file,explode(',',$line));
		  }

		fclose($file);
	 

		if (file_exists(__DIR__.DIRECTORY_SEPARATOR.$fileNameCSV)) {

			wxLaunchDefaultBrowser(__DIR__.DIRECTORY_SEPARATOR.$fileNameCSV);

		}

	}

}


 ?>