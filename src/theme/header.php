<!DOCTYPE html>
<html>
<head>
  <title>Robodoc, the horribly simple documentation manager</title>
  <style>
    .navigation{
      font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
      text-decoration: none;
      border-bottom: 1px #e5e5e5 solid;
    }
    .ulnav{
      text-decoration: none;
      display: inline;
    }
    .linav{
      display: inline;
      text-decoration: none !important;
      color: #000 !important;
      margin-left: 5px;
      margin-right: 5px;
    }
    .robodoc-logo, .pages, .ulnav, .linav{
      display: inline; 
    }
    .pages{
      position: absolute;
      right: 5px;
    }
    a:link, a:visited{
      text-decoration: none;
      color: #22A87C;
    }
    a:hover, a:focus{
      text-decoration: underline;
    }
    .robodoc-logo{
      opacity: 1.0 !important;
      width: 24px;
      height: 24px;
    }
    body{
      font-family: 'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
    }
    .container{
      width: 75%;
      position: absolute;
      left: 12.5%;
      right: 12.5%;
      margin-bottom: 60px;
      padding-bottom: 60px;
    }
    code{
      display: block;
      font-family: 'Source Code Pro', 'Consolas', monospace;
      background-color: #f8eec7;
      color: #a1882b;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      padding: 10px;
      margin: 5px;
    }
    code.inline{
      display: inline;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      padding: 3px;
      margin: 3px;
    }
    .ac{
      margin-top:25%;
      margin-bottom:45%;
      margin-left:30%;
      margin-right:30%;
    }
    .fancybutton{
      background-color:#22a87c;
      color: #fff !important;
      text-size: 16px;
      width: 32px;
      height: 32px;
      text-align: center;
      margin: 10px;
      padding: 10px;
    }
    .footer{
      position: fixed;
      bottom: 0px;
      width: 100%;
      background-color: #e5e5e5;
    }
  </style>
</head>
<body>
  <div class="navigation">
    <div class="robodoc-logo">
      <a href="index.php" class="robodoc-logo">
        <img src="robodoc.png" alt="Robodoc" class="robodoc-logo">
      </a>
    </div>
    <div class="pages">
      <ul class="ulnav">
        <li class="linav">
          <a href="index.php">What's Robodoc?</a>
        </li>
        <li class="linav">
          <a href="index.php?file=start">Getting started</a>
        </li>
        <li class="linav">
          <a href="index.php?file=using">Using Robodoc</a>
        </li>
        <li class="linav">
          <a href="http://github.com/pulsir/robodoc">GitHub repo</a>
        </li>
        <li class="linav">
          <a href="http://reddit.com/r/robodoc">Forum</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">