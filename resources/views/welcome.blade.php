<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>雪狐网 - Laravel开发环境搭建教程</title>
    <style type="text/css">
        body {
          font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          font-size: 14px;
          line-height: 1.428571429;
          color: #333333;
          background-color: #fff;
          padding-top: 60px; }
          a {
                color: #337ab7;
                text-decoration: none;
            }
        @media (min-width: 768px) {
          .lead {
          font-size: 21px; } }
        .navbar {
          position: relative;
          min-height: 50px;
          margin-bottom: 20px;
          border: 1px solid transparent; }
          .navbar:before, .navbar:after {
            content: " ";
            display: table; }
          .navbar:after {
            clear: both; }
          @media (min-width: 768px) {
            .navbar {
              border-radius: 4px; } }
      .navbar-fixed-top .navbar-collapse,
      .navbar-static-top .navbar-collapse,
      .navbar-fixed-bottom .navbar-collapse {
        padding-left: 0;
        padding-right: 0; } }

        .navbar-fixed-top .navbar-collapse,
        .navbar-fixed-bottom .navbar-collapse {
          max-height: 340px; }
          @media (max-device-width: 480px) and (orientation: landscape) {
            .navbar-fixed-top .navbar-collapse,
            .navbar-fixed-bottom .navbar-collapse {
              max-height: 200px; } }
        .navbar-fixed-top,
        .navbar-fixed-bottom {
          position: fixed;
          right: 0;
          left: 0;
          z-index: 1030; }
          @media (min-width: 768px) {
            .navbar-fixed-top,
            .navbar-fixed-bottom {
              border-radius: 0; } }
        .navbar-fixed-top {
          top: 0;
          border-width: 0 0 1px; }
        .container {
          margin-right: auto;
          margin-left: auto;
          padding-left: 15px;
          padding-right: 15px; }
          .container:before, .container:after {
            content: " ";
            display: table; }
          .container:after {
            clear: both; }
          @media (min-width: 768px) {
            .container {
              width: 750px; } }
          @media (min-width: 992px) {
            .container {
              width: 970px; } }
          @media (min-width: 1200px) {
            .container {
              width: 1170px; } }
              .container > .navbar-header,
            .container > .navbar-collapse,
            .container-fluid > .navbar-header,
            .container-fluid > .navbar-collapse {
              margin-right: -15px;
              margin-left: -15px; }
              @media (min-width: 768px) {
                .container > .navbar-header,
                .container > .navbar-collapse,
                .container-fluid > .navbar-header,
                .container-fluid > .navbar-collapse {
                  margin-right: 0;
                  margin-left: 0; } }
              .col-md-offset-1 {
                margin-left: 8.3%; }
            .col-md-10, .col-md-12{
              position: relative;
              min-height: 1px;
              padding-right: 15px;
              float: left;
              width: 83.33%; }
              .col-md-12 {
                width: 100%; }
            .jumbotron {
              padding-top: 30px;
              padding-bottom: 30px;
              margin-bottom: 30px;
              color: inherit;
              background-color: #eeeeee;
              text-align: center; }
              .jumbotron h1,
              .jumbotron .h1 {
                color: inherit; }
              .jumbotron p {
                margin-bottom: 15px;
                font-size: 21px;
                font-weight: 200; }
              .jumbotron > hr {
                border-top-color: #d5d5d5; }
              .container .jumbotron,
              .container-fluid .jumbotron {
                border-radius: 6px;
                padding-left: 15px;
                padding-right: 15px; }
              .jumbotron .container {
                max-width: 100%; }
              @media screen and (min-width: 768px) {
                .jumbotron {
                  padding-top: 48px;
                  padding-bottom: 48px; }
                  .container .jumbotron,
                  .container-fluid .jumbotron {
                    padding-left: 60px;
                    padding-right: 60px; }
                  .jumbotron h1,
                  .jumbotron .h1 {
                    font-size: 63px; } }
                .lead {
                  margin-bottom: 20px;
                  font-size: 16px;
                  font-weight: 300;
                  line-height: 1.4; }
                  @media (min-width: 768px) {
                    .lead {
                      font-size: 21px; } }
            .navbar-inverse {
              background-color: #222;
              border-color: #090909; }
            #logo {
                float: left;
                margin-right: 10px;
                font-size: 1.7em;
                color: #fff;
                text-decoration: none;
                letter-spacing: -1px;
                padding-top: 9px;
                font-weight: bold;
            }
          .jumbotron h1,
          .jumbotron .h1 {
            color: inherit; }
          .jumbotron h1,
          .jumbotron .h1 {
            font-size: 63px; } }
            .jumbotron p {
                margin-bottom: 15px;
                font-size: 21px;
                font-weight: 200;
            }
            footer {
                padding-top: 5px;
                border-top: 1px solid #eaeaea;
                color: #777;
            }
            footer ul {
                float: right;
                list-style: none;
            }
            footer ul li {
                float: left;
                margin-left: 15px;
            }
            footer a {
                color: #555;
                font-size: 14px;
                font-weight: bold;
            }
    </style>
</head>

<body>
    <header class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="col-md-offset-1 col-md-10">
                <a href="/" id="logo">雪狐网 StudyFox.cn</a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <div class="jumbotron">
                <h1>Hello Laravel</h1>
                <p class="lead">
                    您所看到的是
                </p>
                <p>
                    <a href="http://www.studyfox.cn/261.html" target="_blank"> 雪狐网录制的 Laravel 开发环境搭建视频</a>
                </p>
                <p>
                    现在，让我们一起扬帆远航~
                </p>
            </div>
            <div class="col-md-12">
                <footer class="footer">
                    <nav>
                        <ul>
                            <li><a href="http://www.studyfox.cn/" target="_blank">雪狐网——StudyFox.cn</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
