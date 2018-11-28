<?php
class ZLogger{
	/*
		Char in each lines (that is not the max or the min, it's the medium value)
	*/
	protected $logSize = 100;
	/*
		Lines in each file (the is the max lines if each lines have $logSize char)
	*/
	protected $logLines = 5000;
	/*
		Log directory
	*/
	protected $logDir = "log/";
	/*
		Date format 
	*/
	protected $dateFormat = "Y-m-d H:i:s";
	
	private $filename;
	
	public function __construct(){
		if (!file_exists($this->logDir) && !is_dir($this->logDir)) {
			mkdir($this->logDir);         
		}
		$d = scandir($this->logDir);
		$d = count($d)-2;
		if($d == 0){
			$d = 1;
		}
		$this->filename = $this->logDir."log_".$d.".txt";
	}

    public function writeLog($username, $log){
		if(file_exists($this->filename)){
			if(filesize($this->filename) >= $this->logSize*$this->logLines){
				$d = scandir($this->logDir);
				$d = count($d)-2;
				if($d == 0){
					$d = 1;
				}
				$d++;
				$this->filename = $this->logDir."log_".$d.".txt";
			}
		}
        $file = fopen($this->filename, 'a+');
        $str = '['.date($this->dateFormat).'] - '.$username.' - '.$log."\r\n";
        fwrite($file, $str);
        fclose($file);
    }
}
?>
