#空き状況状態表示プログラム

##仕様
-getSchedule関数  
引数を($year,$month)とし、その年の月の休業日を返す。休業日は、あらかじめ配列を用意する。

-getReserve関数
引数を($year,$month)とし、予約が入っている日を返す。今回のプログラムの予約日は、あらかじめ配列で設定する。

-Arailable関数
引数を($year,$month)とし、休業日と予約日を除いた日(予約可能な日)を返す。  

結果として、引数をプルダウン入力し、その年のその月の休業日、予約済みの日、予約可能な日を出力させることが出来る。  
##コーディング規約
-クラス名  
StudlyCaps（単語の先頭を大文字にして、空白は無し）という書き方で命名する。

-クラス定数名  
全て大文字で、単語の区切りをアンダースコアにして命名する。

-メソッド名	
camelCase
最初の単語の先頭は小文字で、次からの単語の先頭は全て大文字にして、(空白は無し）という書き方で命名する。

インデント  
４つのスペースを使用する。


