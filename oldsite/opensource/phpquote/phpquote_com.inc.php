<?
# PHP QUOTE for Quote.com
# Copyright 2005, Gerbrand van Dieijen
# Adapted from PHPQuote, Copyright 2001, Stephen C. Cook and Gear21.Inc. See http://www.booyahmedia.com/open-source/phpquote/
# 
# See Standard GNU GPL License for Details.
# http://www.gnu.org/copyleft/gpl.html
#
# Latest version of PHP Quote can be download from:
# http://www.gerbrand-ict.nl/opensource/
#
# Contact:  gerbrand *at* vandieijen.nl
#

$BasicLycosPage="http://www.quote.com/us/stocks/quote.action?s=<TICKER_SYMBOLS>";
//$DetailedLycosPage="";

########################################################
## Class Definitions                                  ##
########################################################
if(!class_exists("php_lycosquote")) {

class php_lycosquote {
	var $Symbol="Unavailable";
	var $Last=0.0;
	var $Change=0.0;
	var $PercChange=0.0;
	var $Volume="N/A";
	var $Date="N/A";
	var $TStamp="N/A";
	var $Open="N/A";
	var $High="N/A";
	var $Low="N/A";
	var $PrevClose="N/A";
	var $Name="Unavailable";
	var $Bid="N/A";
	var $Ask="N/A";
	var $EPS="N/A";
	var $YrLow="N/A";
	var $YrHigh="N/A";
	var $PE="N/A";

	function scrape_from_table($content, $value) {
	
	}
	function get_single_quote($symb) {
		global $BasicLycosPage;

		$QuotePage=$BasicLycosPage;
		# Prepare Symbol (might break this out into it's own function
		# to add more checking and security.
		$symb=strip_tags($symb);	
		$symb=substr($symb,0,15); 
		$symb=trim($symb);	
		$symb=urlencode($symb);	

		$yf_page=eregi_replace("<TICKER_SYMBOLS>",$symb,$QuotePage);

		$this->Symbol=$symb;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $yf_page);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$store = curl_exec ($ch);
		$contents = curl_exec ($ch);
		curl_close ($ch); 
		
		
		#Lycos doesn't have a CSV feed, so we'll use regexp
			
			//preg_match('/(.+)(\<strong title=\"Symbol: (.*)\">)/i',$contents, $match); //3 is symbol
			$contents=str_replace("\n","",$contents);
			$match = array();
			preg_match('/(Last: <span class=\"majors\">)([0-9.]+)/i',$contents, $match);
			$this->Last=$match[2];
					
			$match = array();
			preg_match('/(<td>\s*<strong>Open:<\/strong>\s*<\/td>\s*<td>)([0-9.,]+)(<)/i',$contents, $match); // 3 is Open
			var_dump($match);
			$this->Open=0+$match[2];

			$match = array();
			preg_match('/(<td>Previous Close<\/td>)(.*)([0-9.,]+)/i',$contents, $match);
			$this->PrevClose=$match[2];
			
			$this->Change=($this->Last)-($this->PrevClose);

			$match = array();
			preg_match('/(<td>\s*<strong>Volume<\/strong>\s*<\/td>\s*<td>)([0-9.,]+)(<)/i',$contents, $match);
			$this->Volume=0+$match[2];			
			
			var_dump($this);
			//rest hebben we toch nog niet nodig, zoek later wel uit
			
			
			//preg_match('/(.+)(Aktuell)(.+)\n(.+)(>)([0-9,]+)(<)/i', $contents, $match);    			
			/*if (sizeof($match) > 0) {			
			?><table border="1"><?
				for ($i=1;$i<sizeof($match);$i++) {
					echo "<tr><td>$i</td><td>";
					echo $match[$i];					
					echo "</td>";
				}
			}
			echo "</table>";*/			
			/*list(	$this->Symbol, 		$this->Last, 	$this->Date,
				$this->TStamp,		$this->Change,	$this->Open,
				$this->High,		$this->Low,	$this->Volume,
				$this->PrevClose,	$this->Name,	$this->Bid,
				$this->Ask,		$this->EPS,	$this->YrLow,
				$this->YrHigh,		$this->PE)=fgetcsv($f, 4096, ','); */
				
				
			if($this->PrevClose>0) {
				$this->PercChange=number_format(($this->Change/$this->PrevClose)*100,2,".",","); //Could use this->Open too.
			} else {
				$this->PercChange="0.00";
			}
			
			return(1);
	}

	function print_single_table() {
		$downcolor="#FF0000";
		$upcolor="#409940";
		if($this->Change==0) {
			$change=$this->Change;
		} else if ($this->Change>0) {
			$change="<font color=$upcolor>$this->Change</font>";
		} else if ($this->Change<0) {
			$change="<font color=$downcolor>$this->Change</font>";
		}

		if($this->PercChange==0.0) {
			$pchange=$this->PercChange."%";
		} else if ($this->PercChange>0.0) {
			$pchange="<font color=$upcolor>$this->PercChange%</font>";
		} else if ($this->Change<0.0) {
			$pchange="<font color=$downcolor>$this->PercChange%</font>";
		}
		
		print <<< ___END_OF_SINGLE_TABLE___
<table border=0 cellspacing=0 cellpadding=1 width="150"><TR><TD bgcolor="#000000">
<table border=0 cellspacing=0 cellpadding=0 width="100%" class="pq_all">
<TR bgcolor="#DDDDDD"><TD WIDTH=100% ALIGN="CENTER" COLSPAN=2 nowrap><a href="http://finance.yahoo.com/q?d=t&s=$this->Symbol">$this->Symbol</a> </TD></TR>
<TR bgcolor="#EEEEEE"><TD WIDTH=100% nowrap>&nbsp;Last </TD>
<TD WIDTH=40% nowrap align=right>$this->Last</TD>
<TR bgcolor="#DDDDDD"><TD WIDTH=100% nowrap>&nbsp;Change </TD>
<TD WIDTH=40% nowrap align=right>$change&nbsp;</TD></TR>
<TR bgcolor="#EEEEEE"><TD WIDTH=100% nowrap>&nbsp;% Change </TD>
<TD WIDTH=40% nowrap align=right>$pchange&nbsp;</TD></TR>
<TR bgcolor="#DDDDDD"><TD WIDTH=100% nowrap>&nbsp;Volume </TD>
<TD WIDTH=40% nowrap align=right>$this->Volume&nbsp;</TD></TR>
<TR bgcolor="#EEEEEE"><TD WIDTH=100% nowrap>&nbsp;Last </TD>
<TD WIDTH=40% nowrap align=right>$this->TStamp&nbsp;</TD></TR>
<TR WIDTH=100% HEIGHT=1px nowrap><TD COLSPAN=2 HEIGHT=1px WIDTH=100%></TD></TR>
<TR bgcolor="#DDDDDD"><TD ALIGN=center colspan=3><font class="pq_tiny">PHPQuote By<br><a href="http://www.booyahmedia.com/"><font co
lor="#555555">BooyahMedia.com</font></a></font></TD></TR>
</TABLE>
</TD></TR></TABLE>

___END_OF_SINGLE_TABLE___;
	}
}

}


//voor testen

/*$q=new php_lycosquote();
$q->get_single_quote("CME:SP06H");
echo $q->print_single_table();
echo $q->PrevC." ".$q->Open;*/
?>
