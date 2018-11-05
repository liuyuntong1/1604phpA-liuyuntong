
  $arr = str_split($str);
  // var_dump($arr);
  foreach($arr as $k =>$v){
    $i = 0;
    foreach($arr as $key => $val){
      if($v==$val){
        $i++;
        if($i == 3){
          echo $v;die;
        }
      }
    }
  }