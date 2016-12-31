<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php


$files1 = glob("*.txt");
$dir1 = "txtfiles/";


foreach ($files1 as $file1) {
    //      VITAL: Necessary to make sure variables are being reset and don't carry over to next file.

    $createfile = '';
    
    $elem1 = 'Ser';
    $elem2 = 'No';
    $elem3 = '';
    $elem4 = '';
    $elem5 = '';
    
    $elemtwo = '';
    $elemthree = '';
    $dayOrnight = '';

    
   $lines1 = file($file1);
   foreach ($lines1 as $line1) {
       $result0 = preg_split('/Time:/', $line1);
       if(count($result0)>1){
           $result_split_0 = explode(' ', $line1);

               
           if(strpos($result_split_0[2], "/")){
               $elem3 = $result_split_0[2];
               $elem3 = trim(str_replace("/","_",$elem3));
               $lengelem3 = strlen(strstr($elem3, '_', true));
               if($lengelem3 === 1){
                   $elem3 = "0" . $elem3;
               }else{
                   $elem3 = $elem3;
               }
               
           }

           if(strpos($result_split_0[3], ":")){
               $elemthree = $result_split_0[3];
                $elemthree = trim(str_replace(":","_",$elemthree));
                $lengelemthree = strlen($elemthree);
                if($lengelemthree === 1){
                    $elemthree = "0" . $elemthree;
                }
           }elseif(strpos($result_split_0[4], ":")){
               $elemthree = $result_split_0[4];
                $elemthree = trim(str_replace(":","_",$elemthree));
                $lengelemthree = strlen(strstr($elemthree, '_', true));
                if($lengelemthree === 1){
                    $elemthree = "0" . $elemthree;
                }
           }

           break;
       }
   }    
    
    
    $file = substr($file1, 0, -4);    
    $result_split0 = explode(' ', $file);


            

             if($result_split0[2] === "ALERT"){
                 
                 if($result_split0[4]==="IMEI"){
                                
                            $elem1 = "IMEI";
                            $elem2 = $result_split0[5]; 

                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];
                            
                            if(strlen($elem5) === 4){                                
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                $handle = fopen($dir1 . $createfile, 'w');
                            } elseif(strlen($elem5) === 3){
                                $elem5 = '0'.$elem5;                               
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                $handle = fopen($dir1 . $createfile, 'w'); 
                            } elseif(strlen($elem5) === 2){
                                $elem5 = '00'.$elem5;
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                $handle = fopen($dir1 . $createfile, 'w');
                            } elseif(strlen($elem5) === 1){
                                $elem5 = '000'.$elem5;
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                $handle = fopen($dir1 . $createfile, 'w');
                            }

                     
                        
                 } else{


                            $elemtwo = $result_split0[6];

                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];
                            if($result_split0[4] === "Ser"){
                                
                                if(strlen($elem5) === 4){                                    
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';                                
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                } elseif(strlen($elem5) === 3){
                                    $elem5 = '0'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';                                
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                } elseif(strlen($elem5) === 2){
                                    $elem5 = '00'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';                               
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                } elseif(strlen($elem5) === 1){
                                    $elem5 = '000'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';                               
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                }
                               
                                
                            } else {
                                $elemtwo = $result_split0[7];

                                $elem4 = $result_split0[0];
                                $elem5 = $result_split0[1];
                                
                                if(strlen($elem5) === 4){                                    
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                } elseif(strlen($elem5) === 3){
                                    $elem5 = '0'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                } elseif(strlen($elem5) === 2){
                                    $elem5 = '00'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                }elseif(strlen($elem5) === 1){
                                    $elem5 = '000'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
//                                    $handle = fopen($dir1 . $createfile, 'w');
                                }
                                
                                
                                
                            }

                            
                             
                     
                 }
                
                
                
            } else {
                
                    if($result_split0[3]==="IMEI"){
                        
                                $elem1 = "IMEI";
                                $elem2 = $result_split0[4];


                                $elem4 = $result_split0[0];
                                $elem5 = $result_split0[1];
                                
                                if(strlen($elem5) === 4){                                    
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                    $handle = fopen($dir1.$createfile, 'w');
                                } elseif(strlen($elem5) === 3){
                                    $elem5 = '0'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                    $handle = fopen($dir1.$createfile, 'w');
                                } elseif(strlen($elem5) === 2){
                                    $elem5 = '00'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                    $handle = fopen($dir1.$createfile, 'w');
                                }elseif(strlen($elem5) === 1){
                                    $elem5 = '000'.$elem5;
                                    $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                    $handle = fopen($dir1.$createfile, 'w');
                                }

                                

                         
                     } else{


                                $elemtwo = $result_split0[5];
                                
                                $elem4 = $result_split0[0];
                                $elem5 = $result_split0[1];
                                
                                if($result_split0[3] === "Ser"){
                                    if(strlen($elem5) === 4){                                        
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    } elseif(strlen($elem5) === 3){
                                        $elem5 = '0'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    } elseif(strlen($elem5) === 2){
                                        $elem5 = '00'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    }elseif(strlen($elem5) === 1){
                                        $elem5 = '000'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    }
                                    
                                } else {
                                    $elemtwo = $result_split0[6];
                                
                                    $elem4 = $result_split0[0];
                                    $elem5 = $result_split0[1];
                                    
                                    if(strlen($elem5) === 4){                                       
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    } elseif(strlen($elem5) === 3){
                                        $elem5 = '0'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    } elseif(strlen($elem5) === 2){
                                        $elem5 = '00'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    }elseif(strlen($elem5) === 1){
                                        $elem5 = '000'.$elem5;
                                        $createfile = $elem1 . ' ' . $elem2 . ' ' . $elemtwo . ' ' . 'from' . ' ' . $elem3 . ' ' . $elemthree . ' ' . $elem4 . ' ' . $elem5 . '.txt';
//                                        $handle = fopen($dir1.$createfile, 'w');
                                    }
                                    
                                    
                                }

                                

                         
                         
                         
                     }

                
            }


        $contents = file_get_contents($file1);
        $putcontent = file_put_contents($dir1.$createfile, $contents);

        
    }

    
    
    

chdir('txtfiles');
$files2 = glob("*.txt");
foreach ($files2 as $file2) {
    //      VITAL: Necessary to make sure variables are being reset and don't carry over to next file.
        //       Cell 1, 2) Unit # and Msg # [Msg (email) will always have which is why we dont have to 0 or blank out below in intro]
        //       Cell 5, 6) Email Date and time [Msg (email) will always have which is why we dont have to 0 or blank out in intro]
    $var1 = '';
    $var2 = '';
    $var5 = '';
    $var6 = '';
    $var26 = '';
    $var28 = '';
    $var29 = '';
    
    
    
    $thisfile = substr($file2, 0, -4);
    $result_split1 = explode(' ', $thisfile);
//    print_r($result_split1);
    if($result_split1[0]==="IMEI"){
        
            $var1 = $result_split1[1];
            $var2 = $result_split1[6];
            
    } else {
        
            $var1 = $result_split1[2];
            $var2 = $result_split1[7];

    }
    
    
    $lines2 = file($file2);
    foreach ($lines2 as $line2) {       
          
          
         $result3= preg_split('/Date:/', $line2);
          if(count($result3)>1){
        
              $result_split3=explode(' ',$result3[1]);
              array_shift($result_split3);

                $var5 = $result_split3[0];
                
                $time = $result_split3[1];
                $daynight = $result_split3[2];
                $emailTime = $time . " " . $daynight;
                $var6 = $emailTime;
                
          }
          
          
          
          $result8= preg_split('/Battery/', $line2);
          if(count($result8)>1){
              $result_split8=explode(' ', $result8[1]);

              
              if($result_split8[2] === "mV:"){
                  $voltlvl = explode(',', $result_split8[3]);
                  $var26 = $voltlvl[0];
              } else if($result_split8[0] === ":"){
                 $voltlvl = substr($result_split8[1], 0, -3);
                $var26 = $voltlvl;
//                echo $var26;
              } else {
                $voltlvl = substr($result_split8[5], 0, -3);
                $var26 = $voltlvl;
//                echo $var26;
              }

              
          }
          

          
          
          
          
//        Cell 28)
          $result9= preg_split('/connect time/', $line2);
          if(count($result9)>1){
              $result_split9=explode(' ', $result9[1]);

              $var28 = $result_split9[1];
          
//           print_r($var28);
//           echo "<br/>";
          } 
          $result9_2= preg_split('/Conn time/', $line2);
          if(count($result9_2)>1){
              $result_split9_2=explode(' ', $result9_2[1]);
              
//              print_r($result_split9_2);

              $var28 = $result_split9_2[1];
          
//           print_r($var28);
//           echo "<br/>";
          }
          
          
          
          
          
          
//       Cell 29)
          $result10= preg_split('/RSSI:/', $line2);
          if(count($result10)>1){
              $result_split10=explode(' ', $result10[1]);
          
              $var29 = $result_split10[1];
              
//           print_r($var29);
//           echo "<br/>";
          }
          
          
          
    }

    
    




///////////////////////////////
////START PRODUCING TABLE//////
///////////////////////////////
    
        echo '<table><tr><td>';
        echo $var1;
        echo '</td><td>';
//        echo $var2;
        echo '</td><td>';
//        echo $var3;
        echo '</td><td>';
//        echo $var4;
        echo '</td><td>';
///////////////////////////////
        echo $var2;
        echo '</td><td>';
///////////////////////////////
        echo $var5;
        echo '</td><td>';
        echo $var6;
        echo '</td><td>';
//        echo $var7;
        echo '</td><td>';
//        echo $var8;
//        echo '</td><td>';
//        echo $var9;
//        echo '</td><td>';
//        echo $var10;
//        echo '</td><td>';
//        echo $var11;
//        echo '</td><td>';
//        echo $var12;
//        echo '</td><td>';
//        echo $var13;
//        echo '</td><td>';
//        echo $var14;
//        echo '</td><td>';
//        echo $var15;
//        echo '</td><td>';
//        echo $var16;
//        echo '</td><td>';
//        echo $var17;
//        echo '</td><td>';
//        echo $var18;
//        echo '</td><td>';
//        echo $var20;
//        echo '</td><td>';
//        echo $var19;
//        echo '</td><td>';
//        echo $var21;
//        echo '</td><td>';
//        echo $var22;
//        echo '</td><td>';
//        echo $var24;
//        echo '</td><td>';
//        echo $var23;
//        echo '</td><td>';
//        echo $var25;
//        echo '</td><td>';
        echo $var26;
        echo '</td><td>';
//        echo $var27;
//        echo '</td><td>';
        echo $var29;
        echo '</td><td>';
        echo $var28;
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
