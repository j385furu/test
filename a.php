#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    // strpos() 関数を使って、文字列 "xy" が含まれる単語を echo "$line"; で表示しなさい。
    if (strpos($line, 'abc') !== false) {// 文字列 "abc" が含まれる単語を表示する
      echo "$line";
    }
  } 
?>