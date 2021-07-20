<?php

/*$x = 21600;  // 6 jam - 6*60*60
$current_time = time();
$path = '/Users/USER/Downloads/'; //tempat download file cipher 
$files = glob($path.'/*.txt*');
foreach($files as $file) {
 $file_creation_time = filemtime($file);
 $difference = $current_time - $file_creation_time;
  if(is_file($file)) {
    if ($difference >= $x) {
      unlink($file);
    }
  }
}
*/
?>

<html>
<head>
  <title>ITCOMPETITION</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme17.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style type="text/css">

    @import url(https://fonts.googleapis.com/css?family=Share+Tech+Mono);
.image-replacement {
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden
}

span.amp {
  font-family: Baskerville, 'Goudy Old Style', Palatino, 'Book Antiqua', serif !important;
  font-style: italic
}



body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none
}

body {
  color: #db0e15;
  font-family: 'Share Tech Mono', monospace;
  font-size: 26px;
  font-weight: 300;
  text-shadow: 0 0 5px rgba(219, 14, 21, .8);
  background: url(https://image.ibb.co/h2hLAJ/bg.png) #000;
  position: relative;
  height: 100vh
}

.container {
  left: 0;
  right: 0;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

.container.is-success {
  -webkit-filter: hue-rotate(180deg) brightness(2.7);
  filter: hue-rotate(180deg) brightness(2.7)
}

.screen::after {
  content: '';
  display: block;
  background: url(https://image.ibb.co/dbSZLJ/bottom.png) no-repeat center;
  margin: 0 auto;
  width: 100%;
  max-width: 500px;
  height: 28px
}

.title {
  text-transform: uppercase;
  text-align: center;
  font-size: 1em;
  font-weight: 300
}

.title::after,
.title::before {
  content: '';
  display: inline-block;
  background: url(https://image.ibb.co/gpxZLJ/top_outer.png);
  width: 144px;
  height: 20px;
  margin: 0 20px
}

.container:not(.is-success) .title.is-success {
  color: #22edfc
}

.box--outer {
  position: relative;
  margin: 0 auto;
  width: 90%;
  max-width: 1080px;
  border-top: #000 18px solid;
  border-bottom: #000 18px solid;
  -o-border-image: url(https://image.ibb.co/kHHeny/hor_line.png) 17 11 17 round;
  border-image: url(https://image.ibb.co/kHHeny/hor_line.png) 17 11 17 round
}

.box {
  display: inline-block;
  text-transform: uppercase;
  text-align: center;
  width: 100%;
  max-width: 1080px
}

.box--inner {
  display: inline-block;
  width: calc(100% - 105px);
  max-width: 1010px
}

.box--inner::after,
.box--inner::before {
  content: '';
  display: inline-block;
  background: url(https://image.ibb.co/kvJfud/box_inner.png) no-repeat center;
  max-width: 642px;
  width: 100%;
  height: 27px
}

.content {
  position: relative;
  display: block;
  max-height: 600px;
  min-height: 400px;
  height: 100%
}

.content .holder {
  left: 0;
  right: 0;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%)
}

.col.col__center,
.col.col__left {
  display: inline-block
}

.col.col__left {
  width: 130px
}

.col.col__center {
  width: 350px;
  margin-right: 130px
}

.label::after {
  content: ':';
  margin-left: -15px;
  display: inline-block
}

#email,
#converter,
#result,
#password {
  border: 2px solid #d7001e;
  margin: 10px 0;
  padding: 10px;
  width: auto;
  max-width: 100%;
  overflow: visible;
  outline: 0;
  background: 0 0;
  color: inherit;
  font: inherit;
  line-height: normal
}

#email::-moz-selection,
#converter::-moz-selection,
#result::-moz-selection,
#password::-moz-selection {
  background: #000
}

#email::selection,
#converter::selection,
#result::selection,
#password::selection {
  background: #000
}

#Clear,
#copy
 {
  border: none;
  width: auto;
  overflow: visible;
  outline: 0;
  cursor: pointer;
  background: 0 0;
  color: inherit;
  font: inherit;
  line-height: normal;
  -webkit-font-smoothing: inherit;
  -moz-osx-font-smoothing: inherit;
  -webkit-appearance: none;
  background: rgba(219, 14, 21, .2);
  text-transform: uppercase
}

@media only screen and (max-width:1260px) {
  .title::after,
  .title::before {
    width: 42px;
    height: 18px
  }
  .col.col__center,
  .col.col__left {
    display: block;
    width: auto;
    margin: 0
  }
  .box--outer::after,
  .box--outer::before {
    display: none
  }
  .title::after,
  .title::before {
    margin: 0 5px
  }
  .content {
    height: 440px
  }
  .box::after,
  .box::before {
    height: 500px
  }
  #Clear,
  #copy {
    margin-bottom: 0
  }
}

@media only screen and (max-width:600px) {
  .container {
    font-size: .8em
  }
  .title::after,
  .title::before {
    width: 4%;
    height: 18px
  }
  .box--outer {
    -o-border-image: url(https://image.ibb.co/kHHeny/hor_line.png) 17 330 17 round;
    border-image: url(https://image.ibb.co/kHHeny/hor_line.png) 17 330 17 round
  }
  .box::after,
  .box::before {
    width: 22px;
    background: url(ver-line-mobile.png) no-repeat center;
    background-size: contain
  }
  .box--inner {
    width: calc(100% - 44px)
  }
  #email,
  #converter,
  #result,
  #password {
    max-width: 70%
  }
  .screen::after {
    max-width: 180px
  }
}

.flash {
  -webkit-animation: flashText 1s ease-out alternate infinite;
  animation: flashText 1s ease-out alternate infinite
}

@-webkit-keyframes flashText {
  0% {
    opacity: .3
  }
  100% {
    opacity: 1
  }
}

@keyframes flashText {
  0% {
    opacity: .3
  }
  100% {
    opacity: 1
  }
}

.typewriter .typewriter-line {
  visibility: hidden
}

@-webkit-keyframes flicker {
  0% {
    opacity: .86139
  }
  5% {
    opacity: .12793
  }
  10% {
    opacity: .36759
  }
  15% {
    opacity: .9766
  }
  20% {
    opacity: .61364
  }
  25% {
    opacity: .94477
  }
  30% {
    opacity: .57811
  }
  35% {
    opacity: .03416
  }
  40% {
    opacity: .21835
  }
  45% {
    opacity: .62054
  }
  50% {
    opacity: .89452
  }
  55% {
    opacity: .89997
  }
  60% {
    opacity: .37872
  }
  65% {
    opacity: .04929
  }
  70% {
    opacity: .14477
  }
  75% {
    opacity: .27512
  }
  80% {
    opacity: .84701
  }
  85% {
    opacity: .85952
  }
  90% {
    opacity: .76553
  }
  95% {
    opacity: .91372
  }
  100% {
    opacity: .05536
  }
}

@keyframes flicker {
  0% {
    opacity: .86139
  }
  5% {
    opacity: .12793
  }
  10% {
    opacity: .36759
  }
  15% {
    opacity: .9766
  }
  20% {
    opacity: .61364
  }
  25% {
    opacity: .94477
  }
  30% {
    opacity: .57811
  }
  35% {
    opacity: .03416
  }
  40% {
    opacity: .21835
  }
  45% {
    opacity: .62054
  }
  50% {
    opacity: .89452
  }
  55% {
    opacity: .89997
  }
  60% {
    opacity: .37872
  }
  65% {
    opacity: .04929
  }
  70% {
    opacity: .14477
  }
  75% {
    opacity: .27512
  }
  80% {
    opacity: .84701
  }
  85% {
    opacity: .85952
  }
  90% {
    opacity: .76553
  }
  95% {
    opacity: .91372
  }
  100% {
    opacity: .05536
  }
}

@-webkit-keyframes steady {
  from {
    background: rgba(255, 230, 230, .1)
  }
  to {
    background: rgba(49, 45, 45, .1)
  }
}

@keyframes steady {
  from {
    background: rgba(255, 230, 230, .1)
  }
  to {
    background: rgba(49, 45, 45, .1)
  }
}

body {
  position: relative;
  overflow: hidden
}

body::after {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  pointer-events: none;
  background: rgba(49, 45, 45, .1);
  opacity: 0;
  pointer-events: none;
  -webkit-animation: flicker .15s infinite, steady 4s;
  animation: flicker .15s infinite, steady 4s
}

body.off {
  background: #000
}

body.off::after {
  -webkit-animation: none;
  animation: none
}

@-webkit-keyframes turn-on {
  0% {
    -webkit-transform: scale(1, .8) translate3d(0, 0, 0);
    transform: scale(1, .8) translate3d(0, 0, 0);
    opacity: 1
  }
  5% {
    -webkit-transform: scale(1.09139, 1.34235) translate3d(0, 100%, 0);
    transform: scale(1.09139, 1.34235) translate3d(0, 100%, 0)
  }
  10% {
    -webkit-transform: scale(.63084, 1.40698) translate3d(0, -100%, 0);
    transform: scale(.63084, 1.40698) translate3d(0, -100%, 0)
  }
  15% {
    -webkit-transform: scale(.75142, 1.34118) translate3d(0, 100%, 0);
    transform: scale(.75142, 1.34118) translate3d(0, 100%, 0)
  }
  20% {
    -webkit-transform: scale(.96173, 1.36858) translate3d(0, -100%, 0);
    transform: scale(.96173, 1.36858) translate3d(0, -100%, 0)
  }
  25% {
    -webkit-transform: scale(1.1348, 1.02729) translate3d(0, 100%, 0);
    transform: scale(1.1348, 1.02729) translate3d(0, 100%, 0)
  }
  30% {
    -webkit-transform: scale(.97038, .71092) translate3d(0, -100%, 0);
    transform: scale(.97038, .71092) translate3d(0, -100%, 0)
  }
  35% {
    -webkit-transform: scale(.6067, 1.31101) translate3d(0, 100%, 0);
    transform: scale(.6067, 1.31101) translate3d(0, 100%, 0)
  }
  40% {
    -webkit-transform: scale(.786, .9326) translate3d(0, -100%, 0);
    transform: scale(.786, .9326) translate3d(0, -100%, 0)
  }
  45% {
    -webkit-transform: scale(1.38602, 1.14399) translate3d(0, 100%, 0);
    transform: scale(1.38602, 1.14399) translate3d(0, 100%, 0)
  }
  50% {
    -webkit-transform: scale(.69973, .90412) translate3d(0, -100%, 0);
    transform: scale(.69973, .90412) translate3d(0, -100%, 0)
  }
  51% {
    -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: brightness(1) saturate(1);
    filter: brightness(1) saturate(1);
    opacity: 0
  }
  100% {
    -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: contrast(1) brightness(1.2) saturate(1.3);
    filter: contrast(1) brightness(1.2) saturate(1.3);
    opacity: 1
  }
}

@keyframes turn-on {
  0% {
    -webkit-transform: scale(1, .8) translate3d(0, 0, 0);
    transform: scale(1, .8) translate3d(0, 0, 0);
    opacity: 1
  }
  5% {
    -webkit-transform: scale(1.09139, 1.34235) translate3d(0, 100%, 0);
    transform: scale(1.09139, 1.34235) translate3d(0, 100%, 0)
  }
  10% {
    -webkit-transform: scale(.63084, 1.40698) translate3d(0, -100%, 0);
    transform: scale(.63084, 1.40698) translate3d(0, -100%, 0)
  }
  15% {
    -webkit-transform: scale(.75142, 1.34118) translate3d(0, 100%, 0);
    transform: scale(.75142, 1.34118) translate3d(0, 100%, 0)
  }
  20% {
    -webkit-transform: scale(.96173, 1.36858) translate3d(0, -100%, 0);
    transform: scale(.96173, 1.36858) translate3d(0, -100%, 0)
  }
  25% {
    -webkit-transform: scale(1.1348, 1.02729) translate3d(0, 100%, 0);
    transform: scale(1.1348, 1.02729) translate3d(0, 100%, 0)
  }
  30% {
    -webkit-transform: scale(.97038, .71092) translate3d(0, -100%, 0);
    transform: scale(.97038, .71092) translate3d(0, -100%, 0)
  }
  35% {
    -webkit-transform: scale(.6067, 1.31101) translate3d(0, 100%, 0);
    transform: scale(.6067, 1.31101) translate3d(0, 100%, 0)
  }
  40% {
    -webkit-transform: scale(.786, .9326) translate3d(0, -100%, 0);
    transform: scale(.786, .9326) translate3d(0, -100%, 0)
  }
  45% {
    -webkit-transform: scale(1.38602, 1.14399) translate3d(0, 100%, 0);
    transform: scale(1.38602, 1.14399) translate3d(0, 100%, 0)
  }
  50% {
    -webkit-transform: scale(.69973, .90412) translate3d(0, -100%, 0);
    transform: scale(.69973, .90412) translate3d(0, -100%, 0)
  }
  51% {
    -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: brightness(1) saturate(1);
    filter: brightness(1) saturate(1);
    opacity: 0
  }
  100% {
    -webkit-transform: scale(1, 1) translate3d(0, 0, 0);
    transform: scale(1, 1) translate3d(0, 0, 0);
    -webkit-filter: contrast(1) brightness(1.2) saturate(1.3);
    filter: contrast(1) brightness(1.2) saturate(1.3);
    opacity: 1
  }
}

@-webkit-keyframes turn-off {
  0% {
    -webkit-transform: scale(1, 1.3) translate3d(0, 0, 0);
    transform: scale(1, 1.3) translate3d(0, 0, 0);
    -webkit-filter: brightness(1);
    filter: brightness(1);
    opacity: 1
  }
  60% {
    -webkit-transform: scale(1.3, .001) translate3d(0, 0, 0);
    transform: scale(1.3, .001) translate3d(0, 0, 0);
    -webkit-filter: brightness(10);
    filter: brightness(10)
  }
  100% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: scale(0, .0001) translate3d(0, 0, 0);
    transform: scale(0, .0001) translate3d(0, 0, 0);
    -webkit-filter: brightness(50);
    filter: brightness(50)
  }
}

@keyframes turn-off {
  0% {
    -webkit-transform: scale(1, 1.3) translate3d(0, 0, 0);
    transform: scale(1, 1.3) translate3d(0, 0, 0);
    -webkit-filter: brightness(1);
    filter: brightness(1);
    opacity: 1
  }
  60% {
    -webkit-transform: scale(1.3, .001) translate3d(0, 0, 0);
    transform: scale(1.3, .001) translate3d(0, 0, 0);
    -webkit-filter: brightness(10);
    filter: brightness(10)
  }
  100% {
    -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    animation-timing-function: cubic-bezier(.755, .05, .855, .06);
    -webkit-transform: scale(0, .0001) translate3d(0, 0, 0);
    transform: scale(0, .0001) translate3d(0, 0, 0);
    -webkit-filter: brightness(50);
    filter: brightness(50)
  }
}

.screen {
  width: 100%;
  height: 100%;
  border: none
}

.container.off>.screen {
  -webkit-animation: turn-off .55s cubic-bezier(.23, 1, .32, 1);
  animation: turn-off .55s cubic-bezier(.23, 1, .32, 1);
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards
}

.container.on>.screen {
  -webkit-animation: turn-on 2s linear;
  animation: turn-on 2s linear;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards
}
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@400;700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
}

* {
  font-family: "Ubuntu Mono", monospace;
}

#content {
  max-width: 900px;
  background: #fff;
  width: 75vw;
  margin: auto;
  padding: 20px;
}



#converter:focus {
  outline: 1px solid #0040ff;
}



#result + button {
  margin-bottom: 8px;
}

.firstSection{
  width: auto;
  height: 600px;
}
/*navbar*/

.sidenav {
  height: 600px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 2%;
  text-transform: uppercase;

  background-repeat: no-repeat;
  background-size: 10%;
  background-position: bottom;
  background-position-x: left;  
}

.sidenav a {
  text-decoration: none;
  font-size: 65%;
  color: red;
  display: block;
  transition: 0.3s;
}
.sidenav .nav__wrap{
    padding: 5% 0%;
    margin: 0% 15%;
}
.sidenav .nav__list{
  border-bottom: 1px solid #A68260;
  padding: 6% 0%;
}
.sidenav .nav__list:first-child{
  border-bottom:none; 
}
.sidenav .nav__list:last-child{
  border-bottom:none; 
}
.sidenav .nav__list_diff{
  padding: 6% 0%;
}
.sidenav .nav__list_closebtn{
  padding: 6% 0%;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  font-size: 40px;
}
.sidenav_open{
  width: 450px;
}
.firstSection{
  width: auto;
  height: 600px;
}

.blinker {
  opacity: 1;
  margin-bottom: -2px;
  height: 15px;
  margin-left: -5px;
  border-left: 7px solid yellow;
  animation: blinker 0.9s steps(2, start) infinite;
}

@keyframes blinker {
  to { 
    visibility: hidden; 
  }
}

  </style>
</head>
<body class="">
  <div class="container on">
    <div class="screen">
      <h3 class="title">
        CONNECTION ESTABLISHED
      </h3>

          <div class="box--outer">
        <div class="box">
          <div class="box--inner">
            <div class="content">
              <div class="holder">

  
  <img src="https://ia601509.us.archive.org/20/items/whats-app-image-2021-06-24-at-10.46.19/WhatsApp%20Image%202021-06-24%20at%2010.46.19.jpeg" width="128" height="128">

    <p>Hi, I'm Echo. Silahkan pilih<span id="copy" style="font-size:30px;cursor:pointer" onclick="openNav()">
      <img src="assets/nav_icon.svg" alt="">versi</span>
    </p>


     


<span id="AboutDevTypeText" class="typeing"></span><span class='blinker'>&#32;</span>

                              
                            </div>
                         </div>
                         <h4>Telik Sandi 4.0</h4>
                       </div>


<div id="side-nav" class="sidenav">
    <div class="nav__wrap">
        <div class="nav__list">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>        
        <div class="nav__list">
          <a href="https://ekopth.github.io/foxtrot/" target="_blank">
          <i class="fas fa-biohazard"></i>&nbsp;Foxtrot
          <i class="fas fa-biohazard"></i>
          </a>
        </div>

        <div class="nav__list">
          <a href="https://ekopth.github.io/Gamma/" target="_blank">
          <i class="fas fa-fingerprint"></i>&nbsp;Gamma
          <i class="fas fa-fingerprint"></i>
        </a>
        </div>

        <div class="nav__list">
          <a href="https://ekopth.github.io/India/" target="_blank">
          <i class="fas fa-dna"></i>&nbsp;India
          <i class="fas fa-dna"></i>
          </a>
        </div>

        <div class="nav__list"><a href="#" target="_blank"></a>
          <i class="fab fa-github"><a href="https://github.com/EkoPTH" target="_blank">
          github</a></i>
          <i class="fab fa-telegram"><a href="https://t.me/K4uM_R3b4haN" target="_blank">
          telegram</a></i>
          </div>
      </div>
</div>
  </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript">

function openNav() {
  document.getElementById("side-nav").classList.add('sidenav_open');
}
function closeNav() {
  document.getElementById("side-nav").classList.remove('sidenav_open');
}


</script>
<script type="text/javascript">

var data = [  
  {
    AboutDevTypeText: "<span>Halo ini adalah Aplikasi kripto milik saya, Aplikasi ini dibuat bedasarkan request dari segelintir aparatur negara untuk mempublikasikannya secara umum. Ada 15 pola yang saya buat namun hanya 3 yang saya publikasikan.</span><br/>"
  }
];

var allElements = document.getElementsByClassName("typeing");
for (var j = 0; j < allElements.length; j++) {
  var currentElementId = allElements[j].id;
  var currentElementIdContent = data[0][currentElementId];
  var element = document.getElementById(currentElementId);
  var devTypeText = currentElementIdContent;

  // type code
  var i = 0, isTag, text;
  (function type() {
    text = devTypeText.slice(0, ++i);
    if (text === devTypeText) return;
    element.innerHTML = text + `<span class='blinker'>&#32;</span>`;
    var char = text.slice(-1);
    if (char === "<") isTag = true;
    if (char === ">") isTag = false;
    if (isTag) return type();
    setTimeout(type, 60);
  })();
}


</script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
