<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css">
        <title></title>
    </head>
    <body>
        <?php
//        $myfile = fopen("1.txt", "r") or die("Unable to open file!");
//          $file = readfile("webdictionary.txt");
//        $num = 5;
//$myfile = fopen("1.txt", "r") or die("Unable to open file!");
//// Output one line until end-of-file
//while(!feof($myfile)) {
////   echo stripos("this Status", "Status")
//   echo get_resource_type($myfile);
//  echo fgets($myfile) . "<br>";
//}


//fclose($myfile);

$files = glob("*.txt");

foreach ($files as $file) {
    //      VITAL: Necessary to make sure variables are being reset and don't carry over to next file.
        //       Cell 1, 2) Unit # and Msg # [Msg (email) will always have which is why we dont have to 0 or blank out below in intro]
        //       Cell 5, 6) Email Date and time [Msg (email) will always have which is why we dont have to 0 or blank out in intro]
        $var3='';
        $var4='';
        $result2 = '';
        
        $var7='';
        $var8='';
        $var9='';
        $var10='';
        $var11='';
        $var12='';
        $var13='';
        $var14='';
        $var15='';
        $result4='';
        $result5='';
        
        $var16='';
        $var17='';
        $var18='';
        $var19='';
        $var20='';
        $var21='';
        $result6='';
        
        $var22='';
        $var23='';
        $var24='';
        $var25='';
        $result7='';
        
        $var26='';
        $var27='';
        $result8='';
        
        $var28='';
        $result9='';
        
        $var29='';
        $result10='';
        
    $lines = file($file);
    foreach ($lines as $line) {
        
        
//    Cell 1, 2) Unit # and Msg # [Msg (email) will always have which is why we dont have to 0 or blank out in intro]
          $result1= preg_split('/Subject:/', $line);
            if(count($result1)>1){
              $result_split1=explode(' ',$result1[1]); 
              $va = $result_split1[2];
              
//              print_r($result_split1);
//              print_r("<br/>");
              
              if($va === "ALERT"){
//                  print_r("alert");
                 $var1 = $result_split1[6];
                 $var2 = $result_split1[1];
                  
//                 print_r("unit " . $va1 . "  msg   " . $va2 );
              } else {
                 $var1 = $result_split1[5];
                 $var2 = $result_split1[1];
                 
//                 print_r("unit " . $var1 . "  msg   " . $var2 );
              }
 
//              echo $var1;
          }
          
          
          
          
          
//       Cell 3, 4)
          $result2= preg_split('/Time:/', $line);
          if(count($result2)>1){
              $result_split2=explode(' ',$result2[1]);
              
//              print_r((($result_split2)));
              
              if($result_split2[2]===""){
//                  print_r("nothing here");
                  $msgDate = $result_split2[1];
                  $var3 = $msgDate;
                  $msgTime = date("g:i:s A", strtotime($result_split2[3]));
                  $var4 = $msgTime;

              } else {
                  $msgDate = $result_split2[1];
                  $var3 = $msgDate;
                  $msgTime = date("g:i:s A", strtotime($result_split2[2]));
                  $var4 = $msgTime;
              }
          }
          
//          $result2= preg_split('/Time:/', $line);
//          if(count($result2)=2){
//              $result_split2=explode(' ',$result2[1]);
//              
////              print_r((($result_split2)));
//              
//              if($result_split2[2]===""){
////                  print_r("nothing here");
//                  $msgDate = $result_split2[1];
//                  $var3 = $msgDate;
//                  $msgTime = date("g:i:s A", strtotime($result_split2[3]));
//                  $var4 = $msgTime;
//
//              } else {
//                  $msgDate = $result_split2[1];
//                  $var3 = $msgDate;
//                  $msgTime = date("g:i:s A", strtotime($result_split2[2]));
//                  $var4 = $msgTime;
//              }
//              
//              
////              print_r($result_split2);
////              print_r($var4);
////              print_r($msgDate);
////              print_r("<br/>");
////              print_r($msgTime);
////              echo "<br/>";
//            
//          } 
         
          
          
          
//        Cell 5, 6) Email Date and time [Msg (email) will always have which is why we dont have to 0 or blank out in intro]
          $result3= preg_split('/Sent:/', $line);
          if(count($result3)>1){
        
              $result_split3=explode(' ',$result3[1]);
            
                $months = array("January"=>"01", "February"=>"02", "March"=>"03", "April"=>"04", "May"=>"05", "June"=>"06","July"=>"07", "August"=>"08", "September"=>"09", "October"=>"10", "November"=>"11", "December"=>"12");
                $month = $months[$result_split3[1]];

                $day = rtrim($result_split3[2], ",");
                
                $year = $result_split3[3];
                
                $emaildateFormat = $month . '/' . $day . '/' . $year;
                $var5 = $emaildateFormat;
                
                $time = $result_split3[4];
                $daynight = $result_split3[5];
                $emailTime = $time . " " . $daynight;
                $var6 = $emailTime;
                
                
//                print_r($emaildateFormat);
//                print_r("<br/>");
//                print_r($emailTime);
//                      
//                      
//               print_r($result_split3);
//                echo "<br/>";
          }


          
          
////////////////////////////////////////////
////Cell 7, 8, 9 10, or 11, 12, 13, 14, 15)//
//////////////////////////////////////////// 
          $result4= preg_split('/Current Lat/', $line);
          $result5= preg_split('/Current tower/', $line);
          if(count($result4)>1){
              $result_split4=explode(' ',$result4[1]);
              
//              Did this solve probl. Keeping testing to see if solved: Variable undefined first file when stack of files with 13
//                    $var9 = '';
//              
//                    $var11='';
//                    $var12='';
//                    $var13='';
//                    $var14='';
//                    $var15='';

                    $replace = str_replace(',',' ',$result_split4[1]);
              
                    $latlng = explode(" ", $replace);
                    $lat = $latlng[0];
                    $lng = $latlng[1];
                        
                    $var7 = $lat;
                    $var8 = $lng;

                    $error = $result_split4[2];
                  
              if($error === "+/-"){

                  if(count($result_split4)<=5){
                      $accuracy = $result_split4[3];
                      $var9 = $accuracy;
                      
                      $lins = file($file);
                    foreach($lins as $lin){
                        $match = strpos($lin, 'http://maps.google');
                        
                        if($match){
                            $var10= trim($lin);
                            break;
                        }
                        
                    }    
                  } elseif(substr(trim($result_split4[5]),-4) !== "&t=m"){
                      $accuracy = $result_split4[3];
                      $var9 = $accuracy;

                      
                      $lins = file($file);
                    foreach($lins as $lin){
                        $match = strpos($lin, '&t=m');
                        
                        if($match){
                            
                            $link1 = trim($lin);
                            $var10 = trim($result_split4[5]).trim($lin);
//                            print_r($link1);
                            break;
                        }
                        
                    }

                  } else {
                      $accuracy = $result_split4[3];
                      $var9 = $accuracy;

                      $link1 = $result_split4[5];
                      $var10 = $link1;
//                      print_r($link1);
                  }

              } elseif(count($result_split4)<5){
                    
                    $lins = file($file);
                    foreach($lins as $lin){
                        $match = strpos($lin, 'http://maps.google');
                        
                        if($match){

                        $link1 = substr($lin,0,-2);
                        $var10 = trim($link1);
                        
                        
//                        print_r($var10);
//                        print_r("<br/>");
                        }
                    }
                    
                    $link1 = $result_split4[3];
              }
              
          } elseif(count($result5)>1) {
//                    $var7='';
//                    $var8='';
//                    $var9='';
//                    $var10='';
//                    $var11='';
              $result_split5=explode(' ',$result5[1]);
              
              $mcc = rtrim($result_split5[3], ",");
              $var11 = $mcc;
              $mnc = rtrim($result_split5[5], ",");
              $var12 = $mnc;
              $lac = rtrim($result_split5[7], ",");
              $var13 = $lac;
              $cid = $result_split5[9];
              $var14 = $cid;
              
              
              if(substr(trim($result_split5[10]),-4) !== ".php"){
                  
                    $lins = file($file);
                    
                    foreach($lins as $lin){
                        $match = strpos($lin, '.php');
                        
                        if($match){
                            
                            $link2 = trim($lin);
                            $var15 = trim($result_split5[10]).trim($lin);
//                            print_r($link1);
                            break;
                        }
                        
                    }
                  
              } else {
                  $link2 = $result_split5[10];
                  $var15 = $link2;
              }
              
              
              
//              print_r($var15 . $var14);
//              echo "<br/>";
          }
        
/////////////////////////////////////////////////////////
//          $result4= preg_split('/Current Lat/', $line);
//          if(count($result4)>1){
//              $result_split4=explode(' ',$result4[1]);
//              
//                if(count($result_split4)<5){
//                    $lins = file($file);
//                    foreach($lins as $lin){
//                        $match = strpos($lin, 'http://maps.google');
//                        
//                        if($match){
//
//                        print_r(substr($lin,0,-2));
//                        print_r("<br/>");
//                        }
//                    }
//                }
//              print_r($result_split4);
//
//              echo "<br/>";
//  
//          }
//////////////////////////////////////////////////////////////          
          
          
          
          
          
          
//          Cell 7,8 ,9, 10 Lat/Long
//          $result4= preg_split('/Current Lat/', $line);
//          if(count($result4)>1){
//              $result_split4=explode(' ',$result4[1]);
//              $replace = str_replace(',',' ',$result_split4[2]);
//              
//              $latlng = explode(" ", $replace);
//              $lat = $latlng[0];
//              $lng = $latlng[1];
//              
//              $var7 = $lat;
//              $var8 = $lng;
//              
//              $accuracy = $result_split4[4];
//              $var9 = $accuracy;
//              
//              $link1 = $result_split4[6];
//              $var10 = $link1;
//                
//              print_r($lat);
//              print_r("<br/>");
//              print_r($lng);
//              print_r("<br/>");
//              print_r($accuracy . " meters");
//              print_r("<br/>");
//              print_r($link1);
//              
//              print_r($result_split4);
//              echo "<br/>";
//          }
          
//        Cell 11,12,13, 14, 15
//          $result5= preg_split('/Current tower/', $line);
//          if(count($result5)>1){
//              $result_split5=explode(' ',$result5[1]);
//              
//              $mcc = rtrim($result_split5[3], ",");
//              $var11 = $mcc;
//              $mnc = rtrim($result_split5[5], ",");
//              $var12 = $mnc;
//              $lac = rtrim($result_split5[7], ",");
//              $var13 = $lac;
//              $cid = $result_split5[9];
//              $var14 = $cid;
//              $link2 = $result_split5[10];
//              $var15 = $link2;
//              
//              print_r($var15 . $var14);
//
//              echo "<br/>";
//          }
          
         
//       Cell 16, 17)
          if(strpos($line, 'Doors closed at') !== false && strpos($line, 'Confirmed closed at') !== false){
              $var16 = "YES";
              $var17 = "YES";
              
//              print_r($var16 . $var17);
          } elseif(strpos($line, 'Confirmed at') !== false){
              $var16 = "YES";
              $var17 = "YES";
              
//              print_r($var16 . $var17);
          } elseif (strpos($line, 'Confirming location not established') !== false) {
              $var16 = "YES";
              $var17 = "NO";
              
//              print_r($var16 . $var17);
          } elseif(strpos($line, 'Door closing location not established') !== false) {
              $var16 = "NO";
              $var17 = "NO";
              
//              print_r($var16 . $var17);
          }

          
          
          
          
          
//          Cell 18, 19, 20, 21)
         $result6= preg_split('/Doors:/', $line);
          if(count($result6)>1){
              $result_split6=explode(' ',$result6[1]);
              $doorStatus= array("LO,"=>"OPEN", "LC,"=>"CLOSED", "RO"=>"OPEN", "RC"=>"CLOSED");
              
              $leftdoor = $result_split6[1];
              $var18 = $doorStatus[$leftdoor];
              
              $rightdoor = $result_split6[2];
              $var19 = $doorStatus[$rightdoor];
              
              
              $leftval = rtrim($result_split6[3], ",");
              $var20= ltrim($leftval, "(");
              
              $rightval = trim($result_split6[4]);
              $rightvalue = rtrim($rightval, ")");
//              $rightva = rtrim($rightvalue, ")");
              $var21 = $rightvalue;
              
//              print_r($var18 . '<br/>' . $var19 . '<br/>' . $var20 . "<br/>" . $var21);
//              print_r($result_split6);
              
//              echo "<br/>";
          }
          
          
          
          
          
//          Cell 22, 23, 24, 25)
          $result7= preg_split('/Light sensors:/', $line);
          if(count($result7)>1){
              $result_split7=explode(' ', $result7[1]);
              $lghtStatus= array("LL,"=>"LL", "LD,"=>"LD", "RL"=>"RL", "RD"=>"RD");
              
              $leftlght = $result_split7[1];
              $var22 = $lghtStatus[$leftlght];
              
              $rightlght = $result_split7[2];
              $var23 = $lghtStatus[$rightlght];
              
              
              $llghtval = rtrim($result_split7[3], ",");
              $var24= ltrim($llghtval, "(");
              
              $rlghtval = trim($result_split7[4]);
              $rightlghtvalue = rtrim($rlghtval, ")");
//              $rightva = rtrim($rightvalue, ")");
              $var25 = $rightlghtvalue;
              
              $newstring = substr($var25, -2);
              $string = substr($var25,0, -2);
              
              if($newstring === "),"){
                  $var25 = $string;
              }
//              print_r($var24);
//              print_r('<br/>');
//              print_r($var25);

//              print_r($var22 . '<br/>' . $var23 . '<br/>' . $var24 . "<br/>" . $var25);
              
//              echo "<br/>";
          }
          
          
          
          
//        Cell 26, 27)
          $result8= preg_split('/Battery:/', $line);
          if(count($result8)>1){
              $result_split8=explode(' ', $result8[1]);
              
              $mv = substr($result_split8[1], 0, -3);
              $var26 = $mv;
              
//              print_r($var26);
              
              $temp = substr($result_split8[3], 0, -3);
              $var27 = $temp;
              
//              print_r($var27);
//           echo "<br/>";
          }   
          
          
          
          
//        Cell 28)
          $result9= preg_split('/connect time/', $line);
          if(count($result9)>1){
              $result_split9=explode(' ', $result9[1]);

              $var28 = $result_split9[1];
          
//           print_r($var28);
//           echo "<br/>";
          } 
          
          
          
          
          
          
          
//       Cell 29)
          $result10= preg_split('/RSSI:/', $line);
          if(count($result10)>1){
              $result_split10=explode(' ', $result10[1]);
          
              $var29 = $result_split10[1];
              
//           print_r($var29);
//           echo "<br/>";
          } 
          
          

          
    }
//    echo $var1;
        echo '<table><tr><td>';
        echo $var1;
        echo '</td><td>';
        echo $var2;
        echo '</td><td>';
        echo $var3;
        echo '</td><td>';
        echo $var4;
        echo '</td><td>';
        echo $var5;
        echo '</td><td>';
        echo $var6;
        echo '</td><td>';
        echo $var7;
        echo '</td><td>';
        echo $var8;
        echo '</td><td>';
        echo $var9;
        echo '</td><td>';
        echo $var10;
        echo '</td><td>';
        echo $var11;
        echo '</td><td>';
        echo $var12;
        echo '</td><td>';
        echo $var13;
        echo '</td><td>';
        echo $var14;
        echo '</td><td>';
        echo $var15;
        echo '</td><td>';
        echo $var16;
        echo '</td><td>';
        echo $var17;
        echo '</td><td>';
        echo $var18;
        echo '</td><td>';
        echo $var20;
        echo '</td><td>';
        echo $var19;
        echo '</td><td>';
        echo $var21;
        echo '</td><td>';
        echo $var22;
        echo '</td><td>';
        echo $var24;
        echo '</td><td>';
        echo $var23;
        echo '</td><td>';
        echo $var25;
        echo '</td><td>';
        echo $var26;
        echo '</td><td>';
        echo $var27;
        echo '</td><td>';
        echo $var28;
        echo '</td><td>';
        echo $var29;
        echo '</td></tr></table>';
        

}



//        echo '<table><tr><td>';
//        echo $num;
//        echo '</td><td>';
//        echo $num;
//        echo '</td></tr></table>'
        ?>
    </body>
</html>
