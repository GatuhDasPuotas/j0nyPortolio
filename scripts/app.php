   <?php
   //instagram api 
   
   $insta_all = "https://graph.instagram.com/me/media?fields=media_url,media_type,children,caption&access_token=IGQVJXSjR4cVRhWDdwX29FSmp2b1p2Y1M0MFdENDRfanpsaEtSdlc1ZAnFzMDlmOXk2VHpnb2tWc25WYkRxYnhBbkhUUmczb3p4V24xbldIM0lSdGlKOWEyS0liTnNwSi1RQzRrNGZA6UG44NlhzeG5fRwZDZD";
  $inta_url = "https://graph.instagram.com/me/media?fields=";
 
  
  $media="media_url,media_type,children,caption"; 
  $token="IGQVJXSjR4cVRhWDdwX29FSmp2b1p2Y1M0MFdENDRfanpsaEtSdlc1ZAnFzMDlmOXk2VHpnb2tWc25WYkRxYnhBbkhUUmczb3p4V24xbldIM0lSdGlKOWEyS0liTnNwSi1RQzRrNGZA6UG44NlhzeG5fRwZDZD";
   
//   $url="$insta_url=$media&acess_token=$token";
  $insta_Json = file_get_contents($insta_all);

  $instaPHP = json_decode($insta_Json);

 $caption = $instaPHP->data[0]->caption;
$img_type = $instaPHP->data[0]->media_type;
  $img_url = $instaPHP->data[0]->media_url;

   function locateNCutCaption(String $capt){ //retira os hashtags do post
       $hell = '#';
       $pos = strpos($capt,$hell,0);
       $newCaption = substr($capt,0,$pos);
       return $newCaption;
   }
$nCap = locateNCutCaption($caption);
   $count = count($instaPHP->data);


   function printCard($num){
       
       for($i=0;$i<$num;$i++){
           global $instaPHP;
          // $cap = locateNCutCaption($instaPHP->data[$i]->caption);
         //  $img = $instaPHP->data[$i]->media_url;
       //    $type = $instaPHP->data[$i]->media_type;
        //   echo $i;
           echo '<div class="cards" data-aos="flip-right" data-aos-duration="1000">
           <div class="d-flex flex-md-row flex-wrap justify-content-center">
               <div class="card">
                   <div class="card-body">
                       <div class="title">
                           <h5 class="card-title">Caption: </h5>
                           <h6>', locateNCutCaption($instaPHP->data[$i]->caption),'</h6>
                       </div>
                       <img src="',$instaPHP->data[$i]->media_url,'" alt="nope" srcset="">
                       <p class="card-text"></p>
                   </div>
               </div>
           </div>
       </div>';
       }


       //Quotes api

       $quoteRandom = "https://anime-chan.herokuapp.com/api/quotes/random";
       $quoteNew = file_get_contents($quoteRandom);
       $quotePhpN = json_decode($quoteNew);

       //echo $quotePhpN[0]->quote;
      // echo $quotePhpN[0]->anime;
    //   echo $quotePhpN[0]->character;

    
      
       function printQuotes(){
           $quot = json_decode(file_get_contents("https://anime-chan.herokuapp.com/api/quotes/random"));

          
       echo'<div class="container-fluid text-center anime-card">
           <div class="anime-text" data-aos="flip-up" data-aos-duration="3000">

           <h5 class="quote">"  ',$quot[0]->quote,'"</h5>
             <span class="else">',$quot[0]->anime,'</span>
             <p class="less">',$quot[0]->character,'</p>

           </div>  
       </div> ';
       }
           
     

      
   }



?>