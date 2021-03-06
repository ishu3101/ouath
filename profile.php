<?php
session_start();
$share_url=urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

// include('db.php'); //Database Connection.
include('number_to_word.php'); //number_to_word_library
?>
<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8" />

  <meta name="description" content="Bulid your Developer portfolio on a click.">
  <meta name="keywords" content="developer, portfolio, stockroom, website, create, stockroomio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  
  <title>liveashish | Stockroom</title>
  <meta property="og:title" content="Stockroom"/>
  <meta property="og:url" content="http://stockroom.io"/>
  <meta property="og:image" content="http://stockroom.io/img/logo_fb.jpg"/>
  <meta property="og:site_name" content="Stockroom"/>
  <meta property="og:description" content="Bulid your Developer portfolio on a click."/>
  
  
  <link href="img/fav.png" type="image/x-icon" rel="shortcut icon" />
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
  <script src="js/share.min.js"></script>

  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" href="css/font.css" />
  <link rel="stylesheet" href="css/icon.css" />



  <script src="js/modernizr.custom.js"></script>


  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.dotdotdot.js"></script>


  <script type="text/javascript" language="javascript">
    




   // $(window).scroll(function() {

   //   if ($(document).scrollTop() > ($(document).height() * 0.05)) {
   //     $(".wrapper").addClass("wrapper_bg");
   //   } else {
   //     $(".wrapper").removeClass("wrapper_bg");

   //   }
   // });



    $(document).ready(function() {

      var elements = $('.repo_desc');
      $.each(elements, function(key, value){ 
        if(value.clientHeight > 160){
          value.className += " truncate";
        }
      })

    });


    $(document).ready(function() {
      $(".repo_desc").dotdotdot({
        watch: "window"
      });
    });


    $(document).ready(function() {
      $(".repo_name").dotdotdot({
        watch: "window"
      });
    });


  </script>






</head>
<body>


 <script type="text/javascript">
   jQuery(document).ready(function($) {  
    $(window).load(function(){
      $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });

  });
 </script>

 
 <div id="preloader"> <span> Loading.. Feel free to wait forever.</span></div>

 <section class="wrapper">

<div class="row">
  

     <div class="small-6 columns"><div class="logo"><img src="img/logo_png.png"></div></div>
     <div class="small-6 columns"><div class="logo right"><img src="img/logo_png.png"></div></div>
   
 

</div>

</section>




<!-- ///////////////////////////// Start Intro Section ///////////////////////////// -->

<section class="intro">
  

  <div class="row" style="padding-top:180px;padding-bottom:100px;">
    <div class="row">
     
          <div class="large-2 columns">

               <div class="profile_img"><a href="#"><img src="img/profile.jpeg"></a></div>

             </div>


              <div class="large-10 columns">

                 <h1 class="profile_name">Jaime Chronister</h1>
                 <p class="location">Chicago</p>
                 <p class="email">jaimechronister@gmail.com</p>
                
             </div>

    </div>
  </div>


</section>





  

  <div class="tabs tabs-style-underline">
          <nav>
            <ul>
              <li><a href="#section-underline-1" class="icon icon-github"><span>Github</span></a></li>
              <li><a href="#section-underline" class="icon icon-bitbucket"><span>Bitbucket</span></a></li>
              <li><a href="#section-underline-3" class="icon icon-upload"><span>Stackoverflow</span></a></li>
            
            </ul>
          </nav>



            <div class="content-wrap">



    <!--  /////////////  Github Tab   //////////////   -->
               
                    <section id="section-underline-1"> 

                      
                                  <div class="repo">
                                    <div class="row" style="margin-top:40px;">




                                          <div class="row stats">

                                             <div class="medium-3 columns">
                                                 <span class="number">523</span>
                                                 <span class="text">Followers</span>
                                             </div>

                                             <div class="medium-3 columns">
                                                  <span class="number">124</span>
                                                 <span class="text">Following</span>
                                             </div>


                                             <div class="medium-3 columns">
                                                  <span class="number">86</span>
                                                 <span class="text">Commits</span>
                                             </div>

                                             <div class="medium-3 columns">
                                                  <span class="number">23</span>
                                                 <span class="text">Public Gists</span>
                                             </div>

                                          </div>




                                      <h1>Repositories</h1>




                                      <div class="row one" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/cricketnotification" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">cricketnotification</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Notify Live cricket scores of any live games using Cricinfo data.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/scorer.py" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">scorer.py</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">A simple python script to fetch cricket scores and send notifications.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>37</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/chatbot" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">chatbot</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">This is an AI bot which can chat with the user using AIML based contexts.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>3</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row two" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/tutorindia-crawler" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">tutorindia-crawler</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">This a crawler which crawls tutorindia


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>3</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/prashantpandeyfun10/Projects" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang "> </h1>
                                                <h2 class="repo_name">Projects</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">:page_with_curl: A list of practical projects that anyone can solve in any programming language.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>181</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/django-apscheduler" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">django-apscheduler</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Cronjob in Django using apscheduler 


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>1</span> </li>
                                                  <li class="fork"><span>1</span> </li>
                                                  <li class="commit"><span>3</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row three" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/url-shortner" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang one">JavaScript </h1>
                                                <h2 class="repo_name">url-shortner</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>3</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/dsp-core" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang one">JavaScript </h1>
                                                <h2 class="repo_name">dsp-core</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">DreamFactory Services Platform


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/number_to_word" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">number_to_word</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row four" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/qp-auto-apload" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">qp-auto-apload</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/facebook-php-sdk" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">facebook-php-sdk</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Use the Facebook SDK for PHP to integrate with Facebook, help build engaging social apps, and get more users.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>240</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/birthday" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">birthday</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Birthday automates the facebook reply to birthday posts


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row five" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/vlc-beat" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">vlc-beat</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Python script which updates a status when you listen to a song or watch a video in VLC on your local machine.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>1</span> </li>
                                                  <li class="fork"><span>5</span> </li>
                                                  <li class="commit"><span>4</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/mobill" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang one">JavaScript </h1>
                                                <h2 class="repo_name">mobill</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Bill in your mobile!


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>1</span> </li>
                                                  <li class="commit"><span>5</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/wishme-thankyou" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">wishme-thankyou</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">A script to automate the process of thanking friends who wish you on your birthday.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>8</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row six" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/cows-and-bulls" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang five">Python </h1>
                                                <h2 class="repo_name">cows-and-bulls</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">Cows and Bulls is a famous paper game where the user have to guess a word given by the opponent.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>3</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/new_intranet" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">new_intranet</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">This script fetches all the latest posts from IIIT-Bh Intranet and shows them in a custom designed page.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>1</span> </li>
                                                  <li class="commit"><span>10</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a><a href="https://github.com/liveashish/vms" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">vms</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">This is a repo for Vendor Management System


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>2</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a></div>
                                          </div><div class="row seven" style="margin-top: 30px;">   <!-- Row starts -->
                                            <div class="large-12 large-centered columns"><a href="https://github.com/liveashish/hib" target="_blank">
                                            <div class="medium-4 columns">
                                              <div class="repo_wrapper">
                                                <h1 class="lang fifteen">PHP </h1>
                                                <h2 class="repo_name">hib</h2>
                                                <div class="line"></div>
                                                <p class="repo_desc">This script enables to bypass Hibiscus login through a third-party application.


                                                </p>

                                                <ul class="count">
                                                  <li class="star"><span>0</span> </li>
                                                  <li class="fork"><span>0</span> </li>
                                                  <li class="commit"><span>3</span> </li>
                                                </ul>

                                              </div>
                                            </div>
                                          </a>



                                  </div>

                                  </div>

                    </section>
             <!--  /////////////  Github Tab   //////////////   -->





                   <!--  /////////////  Bitbucket Tab   //////////////   -->

                    <section id="section-underline-2">

                       <div class="row not_connected">

                           <img src="img/not_connected.svg" style="width:12%;margin-bottom:20px;">
                           <p> You’re not connected with Bitbucket. </p>

                           <a href="#" class="btn bit" id="bitbucketlogin"> <span class="git_icon" style="margin-right:13px;"><img src="img/bit_icon.svg" style="width:20px;" onclick="bitbucket()"></span>Connect with Bitbucket </a>
                           <button type="button" onclick="randomFunction()">Request data</button>
                            <div id="print"></div>

                        </div>

                    </section>

                   <!--  /////////////  Bitbucket Tab   //////////////   -->




                     <!--  /////////////  Stackoverflow Tab   //////////////   -->

                      <section id="section-underline-3" style="margin-top:50px;">

                         <div class="row stats" style="padding: 50px 0px;">

                            <div class="medium-4 columns" style="border-right:1px solid #e7ecea;">
                                 <span class="number">74,623</span>
                                  <span class="text">Reputation</span>
                            </div>

                            <div class="medium-7 columns" >

                                <div class="row">

                                     <div class="medium-4 columns">   <img src="img/gold_badge.svg"> <span class="badge_text"> 28</span> </div>
                                     <div class="medium-4 columns">  <img src="img/silver_badge.svg"> <span class="badge_text"> 45</span></div>
                                     <div class="medium-4 columns"><img src="img/bronze_badge.svg"> <span class="badge_text"> 62</span></div>


                                </div>

                            </div>


                          </div>




                           <div class="row stats" style="padding: 50px 0px;">
                               <p style="font-family: 'BrandonGrotesque-Regular';font-size: 20px;color: #6C6C6C;text-transform:uppercase;margin-left:80px;">Top Tags </p>

                               <ul class="stats">

                                  <li style="margin-left:0;">   <span class="tags" style="background-color:#F56B6B;"> Java </span>  </li>
                                  <li>   <span class="tags" style="background-color:#7A6BF5;"> Python</span>  </li>
                                  <li>   <span class="tags" style="background-color:#40BCEA;"> HTML </span>  </li>
                                  <li>   <span class="tags" style="background-color:#A2D23E;"> Javascript </span>  </li>
                                  <li>   <span class="tags" style="background-color:#36C5B6;"> Node JS </span>  </li>

                              </ul>


                           </div>




                            <div class="row stats" style="padding: 50px 0px;">


                                        <div class="medium-4 columns">
                                                 <span class="number">13,015</span>
                                                 <span class="text">Questions</span>
                                             </div>

                                             <div class="medium-4 columns">
                                                  <span class="number">235</span>
                                                 <span class="text">Answers</span>
                                             </div>


                                             <div class="medium-4 columns">
                                                  <span class="number">9.4m</span>
                                                 <span class="text">People reached</span>
                                 </div>
                              



                           </div>



                      </section>

                     <!--  /////////////  Stackoverflow Tab   //////////////   -->

           
          </div><!-- /content -->
         



        </div><!-- /tabs -->














<!-- ///////////////////////////// End Intro Section ///////////////////////////// -->



<section class="footer">



  

  

  <div class="social">
    <div class="row" >
     
     <div class="small-2 small-centered columns">    


      

       <div class="small-6  columns">
         <a href="https://www.facebook.com/dialog/feed?app_id=795549837193940&redirect_uri=http%3A%2F%2Fstockroom.io%2Fliveashish&link=http%3A%2F%2Fstockroom.io%2Fliveashish" target="_blank" class="icon facebook"><span class="icon-facebook"></span></a>
         
       </div>
       



       <div class="small-6  columns">
         <a href="http://twitter.com/share?text=Awesome! Just built my developer portfolio. Check this :D &url=http%3A%2F%2Fstockroom.io%2Fliveashish&hashtags=stockroomio,developer,portfolio" target="_blank" class="icon twitter"><span class="icon-twitter"></span></a>
         
       </div>

       
       
     </div>
   </div>
 </div>



 <a href="http://stockroom.io"><img src="img/logo_footer.png"></a>
 <img class="zigzag" src="img/zigzag.png">
 <p>Made with love in India</p>

</section>


  


  <script src="js/cbpFWTabs.js"></script>
    <script>
      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
    </script>





<script src="js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58589045-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
//    function randomFunction()
// {
//   var xmlhttp;
//   if (window.XMLHttpRequest)
//   {// code for IE7+, Firefox, Chrome, Opera, Safari
//     xmlhttp=new XMLHttpRequest();
//   }
//   else
//   {// code for IE6, IE5
//     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//   }

//   xmlhttp.onreadystatechange=function()
//   {
//     if (xmlhttp.readyState==4 && xmlhttp.status==200)
//     {
//       var data = JSON.parse(xmlhttp.responseText);
//       var html = '<span class="apple">'+data.user+'</span><span class="banana">'+data.b+'</span>';
//       console.log(data.user.username);
//       document.getElementById("print").innerHTML = html;
//     }
//   }

//   xmlhttp.open("POST","oauth/login_with_bitbucket.php",true);
//   xmlhttp.send();
// }



var data = "";
  var randomFunction = function(){
    $.ajax({
      url: 'oauth/login_with_bitbucket.php',
      type: 'POST',
      data: data,
      cache: false,
      dataType: 'json',
      processData: false, // Don't process the files
      contentType: false, // Set content type to false as jQuery will tell the server its a query string request
      success: function(data, textStatus, jqXHR)
      {
        a = data.user.username;
        b = data.b;
        $('#print').html(a);
        $('#print').html(b);
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        // Handle errors here
        console.log('ERROR: ' + errorThrown);
        // STOP LOADING SPINNER
      }
    });
  }
  </script>
</html>
<?php header("Content-Type: text/javascript; charset=utf-8"); ?>
