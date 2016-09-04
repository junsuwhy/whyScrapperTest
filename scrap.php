<?php
$sh = 'curl "http://sasw.mohw.gov.tw/app39/oldProjectView/query?qName=&qapplyGroup=&qorgName=&qyear=103&max=50&offset=0"';
$result = shell_exec($sh);
echo $result;



