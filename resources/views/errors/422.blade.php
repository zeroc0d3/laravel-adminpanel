<!DOCTYPE html>
<html>
<head>
  <title>The change you wanted was rejected (422)</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body {
      color: #2E2F30;
      text-align: center;
      font-family: "Arial", "Trajan Pro", "Times New Roman", Times, serif;
      margin: 0;
    }
    div.dialog {
      width: 95%;
      max-width: 37em;
      margin: 4em auto 0;
    }
    div.dialog > div {
      border: 1px solid #CCC;
      border-right-color: #999;
      border-left-color: #999;
      border-bottom-color: #BBB;
      border-top: #B00100 solid 4px;
      border-top-left-radius: 9px;
      border-top-right-radius: 9px;
      background-color: white;
      padding: 7px 7% 0;
      box-shadow: 0 3px 8px rgba(50, 50, 50, 0.17);
    }
    div.dialog h1 {
      font-size: 100%;
      color: #730E15;
      line-height: 1.5em;
    }
    div.dialog > p {
      text-align: center;
      margin: 0 0 1em;
      padding: 1em;
      background-color: #F7F7F7;
      border: 1px solid #CCC;
      border-right-color: #999;
      border-left-color: #999;
      border-bottom-color: #999;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 4px;
      border-top-color: #DADADA;
      color: #666;
      box-shadow: 0 3px 8px rgba(50, 50, 50, 0.17);
    }
    *, *:after, *:before {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
      box-sizing: border-box; }
    html {
      background: #ccc;
      font: bold 12px/22px "Arial", "Trajan Pro", "Times New Roman", Times, serif;
      color: #430400;
      text-shadow: 0 1px 0 rgba(255, 255, 255, 0.15); }
    .error-page-wrap {
      width: 310px;
      height: 310px;
      margin: 34px auto; }
    .error-page-wrap:before {
      box-shadow: 0 0 200px 150px #fff;
      width: 310px;
      height: 310px;
      border-radius: 50%;
      position: relative;
      z-index: -1;
      content: '';
      display: block; }
    .error-page {
      width: 310px;
      height: 310px;
      border-radius: 50%;
      top: -310px;
      position: relative;
      text-align: center;
      background: #d36242;
      background: -moz-linear-gradient(top, #d36242 0%, darkred 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d36242), color-stop(100%, darkred));
      background: -webkit-linear-gradient(top, #d36242 0%, darkred 100%);
      background: -o-linear-gradient(top, #d36242 0%, darkred 100%);
      background: -ms-linear-gradient(top, #d36242 0%, darkred 100%);
      background: linear-gradient(to bottom, #d36242 0%, darkred 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='$firstColor', endColorstr='$secondColor',GradientType=0 ); }
    .error-page:before {
      width: 63px;
      height: 63px;
      border-radius: 50%;
      box-shadow: 3px 25px 0 5px #C95439;
      content: '';
      z-index: -1;
      display: block;
      position: relative;
      top: -19px;
      left: 44px; }
    .error-page:after {
      width: 310px;
      height: 17px;
      margin: 0 auto;
      top: 44px;
      content: '';
      z-index: -1;
      display: block;
      position: relative;
      background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.65)), color-stop(59%, rgba(35, 26, 26, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
      background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
      background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
      background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
      background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.65) 0%, rgba(35, 26, 26, 0) 59%, rgba(60, 44, 44, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6000000', endColorstr='#003c2c2c',GradientType=1 ); }
    .error-page h1 {
      color: rgba(255, 255, 255, 0.94);
      font-size: 100px;
      margin: 65px auto 0 auto;
      text-shadow: 0px 0 7px rgba(0, 0, 0, 0.5); }
    .error-page h1:before {
      width: 260px;
      height: 1px;
      position: relative;
      margin: 0 auto;
      top: 70px;
      content: '';
      display: block;
      background: -moz-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(111, 25, 25, 0.65)), color-stop(70%, rgba(75, 38, 38, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
      background: -webkit-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -o-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -ms-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: radial-gradient(ellipse at center, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a66f1919', endColorstr='#003c2c2c',GradientType=1 ); }
    .error-page h1:after {
      width: 260px;
      height: 1px;
      content: '';
      display: block;
      opacity: 0.2;
      margin: 0 auto;
      top: 50px;
      position: relative;
      background: -moz-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(247, 173, 148, 0.65)), color-stop(99%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 0)));
      background: -webkit-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -o-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -ms-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: radial-gradient(ellipse at center, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6f7ad94', endColorstr='#00ffffff',GradientType=1 ); }
    .error-page h2 {
      margin: 55px 0 30px 0;
      font-size: 17px; }
    .error-page h2:before {
      width: 130px;
      height: 1px;
      position: relative;
      margin: 0 auto;
      top: 31px;
      content: '';
      display: block;
      background: -moz-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(111, 25, 25, 0.65)), color-stop(70%, rgba(75, 38, 38, 0)), color-stop(100%, rgba(60, 44, 44, 0)));
      background: -webkit-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -o-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: -ms-radial-gradient(center, ellipse cover, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      background: radial-gradient(ellipse at center, rgba(111, 25, 25, 0.65) 0%, rgba(75, 38, 38, 0) 70%, rgba(60, 44, 44, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a66f1919', endColorstr='#003c2c2c',GradientType=1 ); }
    .error-page h2:after {
      width: 130px;
      height: 1px;
      content: '';
      display: block;
      opacity: 0.2;
      margin: 0 auto;
      top: 11px;
      position: relative;
      background: -moz-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(247, 173, 148, 0.65)), color-stop(99%, rgba(255, 255, 255, 0.01)), color-stop(100%, rgba(255, 255, 255, 0)));
      background: -webkit-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -o-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: -ms-radial-gradient(center, ellipse cover, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      background: radial-gradient(ellipse at center, rgba(247, 173, 148, 0.65) 0%, rgba(255, 255, 255, 0.01) 99%, rgba(255, 255, 255, 0) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a6f7ad94', endColorstr='#00ffffff',GradientType=1 ); }
    .error-back {
      text-decoration: none;
      color: #430400;
      font-size: 15px; }
    .error-back:hover {
      color: #EB957D;
      text-shadow: 0 0 3px black; }
  </style>
</head>

<body>
<!-- This file lives in public/422.html -->
<div class="dialog">
  <div>
      <h1>{{ trans('http.422.title') }}</h1>
  </div>
  <p>{{ trans('http.422.description') }}</p>
  <p>If you are the application owner check the logs for more information.</p>
</div>
<div class="error-page-wrap">
  <article class="error-page gradient">
    <hgroup>
      <h1>422</h1>
      <h2>Unprocessable Entity</h2>
    </hgroup>
  </article>
</div>
</body>
</html>