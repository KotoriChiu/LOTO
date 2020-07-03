<?php 
    include('simple_html_dom.php');
    $html = new simple_html_dom();
    $html->load_file('http://lotto123.org/');
	$a = 0;
	echo "$";
    foreach( $html->find('tr td  b') as $s){
        switch($a){
            case 6:
                $s =  str_replace("<b>","",$s);
                
                $s =  str_replace("</b>","",$s);
                $s =  str_replace("/","",$s);
                echo $s;
            break;
            case 7:
                $sim = str_replace(",","",str_replace("&nbsp;","",$s)); 
                $sim = str_replace("<b>","",$sim);
                $sim = str_replace("</b>","",$sim);
                echo $sim;
            break;
            case 9:
                $s =  str_replace("<b>","",$s);
                $s =  str_replace("</b>","",$s);
                $s =  str_replace("/","",$s);
                echo $s;
            break;
            case 8:
                $s =  str_replace("<b>","",$s);
                $s =  str_replace("</b>","",$s);
                
                echo $s;
            break;
        }
        $a+=1;
	}
echo "|";        
    
?>