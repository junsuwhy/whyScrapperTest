<?php 

include_once('/root/whyScrapperTest/simple_html_dom.php');
$keep = true;
$round = 0;
while($keep){
$offset = $round * 50;
$html = file_get_html('http://sasw.mohw.gov.tw/app39/oldProjectView/query?qName=&qapplyGroup=&qorgName=&qyear=103&max=50&offset='.$offset);

if(count($html->find('tr'))==1){
break;

}
$i = 0;
foreach($html->find('tr') as $e){
if($i==0){
$i++;
continue;
}
  $e_name = $e->children(0);
  $name = preg_replace("/ /",'',$e_name->innertext);
  if(count($e_name->find('a'))>=1){
$a = $e_name->find('a');
$name = preg_replace("/ /",'',$a[0]->innertext);
}else{
$name = preg_replace("/ /",'',$e_name->innertext);
}
  $e = $e->children(3);
  $money = $e->innertext;
  $money = preg_replace("/[ ,元]/i",'',$money);
  print($name);
  print(",");
  print($money);
  print("\n");
} 

$round++;
}




