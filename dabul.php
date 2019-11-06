<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dabul extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('dabul_model');
		$this->load->file('assets/simple_html_dom.php');
		$this->load->helper('url');
		$this->load->helper('file');
	}
	public function help(){
		$this->load->view('help');
	}
	public function index(){
		$this->load->view('home');
	}
	public function main(){
		//echo "<img src='localhost/pwl/ta/databulary/94.jpg'/>";
		$this->load->view('main');
	}

	public function search(){
		$this->load->helper('form');
		//$this->load->view('header');
		$value = $this->input->get('value');
		if ($value=="" || !preg_match("/[a-z]/i", $value)) {
			$var["error"] = "error";
			$this->load->view('new',$var);
			return true;
		}

		if (isset($value)) {
			str_replace("?value=go", "", $value);
			$value= strtolower($value);
			$search = $this->dabul_model->select($value)->result();
			$var=array();
			if (!isset($search)) {
	  			echo "data not found";
			}else{
				$a= ucfirst($value[0]."eng");
				$b= ucfirst($value[0]."ind");
				foreach ($search as $key) {
					$eng = $key->$a;
					$ind = $key->$b;
				}
				if (isset($eng)) {
					$irregular = $this->get_irregular($value);
	  				$var["eng"] = $eng;
					$var["irr"] = $irregular;
					$var["ind"] = $ind;
				}


				//$this->wikipedia($value);
				
				
				///////////////sentencedict
				$htmls = read_file('lib/'.$value.'_sen.php');

				if ($htmls=="") {
					$htmls = file_get_html("http://sentencedict.com/".$value.".html");
					if ( ! write_file('lib/'.$value.'_sen.php',$htmls))
    				{
            			echo 'Unable to write the file';
    				}
    				else
    				{
    				}
				} else {
					$htmls = file_get_html('lib/'.$value.'_sen.php');
				}

				
				
				$var["synonim"] = $this->synonim($htmls);
				$var["sentence"] = $this->sentence($htmls);


				/////////////////wikippedia

				$htmlw="";
				$htmlw = read_file('lib/'.$value.'_wiki.php');
				if ($htmlw=="") {

					$htmlw = file_get_html("https://en.wikipedia.org/wiki/".$value);
					if ( ! write_file('lib/'.$value.'_wiki.php',$htmlw))
    				{
            			echo 'Unable to write the file';
    				}
    				else
    				{
         			
    				}
				}else {
					$htmlw = file_get_html('lib/'.$value.'_wiki.php');
				}

				
				$var["para"] = $this->para($htmlw);
				// $this->link($value); <--
				// $this->link2($value);
				$var["img"] = $this->image($htmlw);

				///////////////////////kbbi

				

				$ind = str_replace(array('kb.','kt.','kk.',',','.','Sl.:','Inf.:'), '',$ind);
				
				$ind = substr($ind, strpos($ind, ":") + 1);   
				
				$ind = preg_replace("/[^a-zA-Z ]+/", "",$ind);

				$ind = explode(' ',trim($ind));

				for ($i=0; $i < count($ind); $i++) { 
					if (strlen($ind[$i])>1) {
						$ind = $ind[$i];
						break;
					}
				}



				$htmlk="";
				$htmlk = read_file('lib/'.$value.'_kbbi.php');
				if ($htmlk=="") {
					$htmlk= file_get_html("https://kbbi.co.id/arti-kata/".$ind);
					if ( ! write_file('lib/'.$value.'_kbbi.php',$htmlk))
    				{
            			echo 'Unable to write the file';
    				}
    				else
    				{
         			
    				}
				}else {
					$htmlk = file_get_html('lib/'.$value.'_kbbi.php');
				}
				$var["kbbi"] = $this->kbbi($htmlk);

				$this->load->view('new',$var);
				
			}
		}
	}
	public function kbbi($html){
		$plain2=array();
		$i=0;
		foreach ($html->find('p[class=arti]') as $div) {
    		$plain2[$i] = $div->plaintext;
    		$i++;
		};


		return $plain2;
	}
	public function image($html){

		$plain3=array();
		$i=0;
		foreach ($html->find('div[class=thumb tright] ') as $div) {
			
			foreach ($div->find('img[class=thumbimage]') as $key ) {
				$plain3[0][$i]=$key->src;
			}
			foreach ($div->find('div[class=thumbcaption]') as $key ) {
				$plain3[1][$i]=$key->plaintext;
			}

    		$i++;
		};

		
		return $plain3;
	}
	public function para($html){
		$plain=array();
		$i=0;
		foreach ($html->find('p') as $div) {
    		$plain[$i] = $div->plaintext;
    		$i++;
		};
		
		return $plain;
	}

	public function get_irregular($value){
		$search = $this->dabul_model->irregular($value)->result();
		if (!isset($search)) {
  			
		}else{
			foreach ($search as $key) {
				$v1 = $key->v1;
				$v2 = $key->v2;
				$v3 = $key->v3;
			}
			if (isset($v1)) {
				$a=array(
					"v1" => $v1,
					"v2" => $v2,
					"v3" => $v3);
				return $a;
			}
			
		}
		return NULL;
	}
	public function synonim($html){
		// $url="http://sentencedict.com/".$value.".html";
  //   	$conntent = file_get_contents($url,NULL,NULL,0,13500);
  //   	echo $conntent;
		$plain=array();
		$i=0;
		foreach ($html->find('div div div div div') as $div) {

    		$plain[$i] = $div->plaintext;
    		if (isset($plain[$i])) {
    			break;
    		}
    		$i++;
		};
		if ($plain==array()) {
			foreach ($html->find('synonim') as $div) {
    			$plain[0] = $div->plaintext;
    			$i++;
			};

		}
		
		return $plain;
	}

	public function sentence($html){
		// $url="http://sentencedict.com/".$value.".html";
  //   	$conntent = file_get_contents($url,NULL,NULL,0,13500);
  //   	echo $conntent;
		$plain=array();
		$i=0;
		foreach ($html->find('div[id=all]') as $div) {
			foreach ($div->find('div[id=ad_unit]') as $key) {
				$key->outertext='';
				$key->innertext='';
			}
			foreach ($div->find('div[id=imageId]') as $key) {
				$key->outertext='';
				$key->innertext='';
			}
			foreach ($div->find('div[id="ad_marginbottom_0]') as $key) {
				$key->outertext='';
				$key->innertext='';
			}
			foreach ($div->find('a') as $key) {
				$key->outertext='';
				$key->innertext='';
			}
    		$plain[$i] = $div->outertext;
    		
    		



    		$i++;
		}
    	return $plain;
		
	}

	public function wikipedia($value){

		    $url="web/wiki/".$value.".php";
		    try {
		    	$conntent = file_get_contents($url,NULL,NULL,0,13500);
    		$conntent=str_replace('id="siteSub"', "style='display: none'", $conntent);
    		$conntent=str_replace('id="jump-to-nav"', "style='display: none'", $conntent);
    		$conntent=str_replace('<caption>', "<caption style='display: none'>", $conntent);
    		$conntent=str_replace('class="hatnote navigation-not-searchable"', "style='display: none'", $conntent);
    		$conntent=str_replace('class="mw-indicator"', "style='display: none'", $conntent);
    		$conntent=str_replace('id="mw-navigation"', "style='display: none'", $conntent);
    		$show = $conntent;
    		echo $show;
		    	
		    } catch (Exception $e) {
		    	echo "error wikipedia";
		    	
		    }
	}


}
