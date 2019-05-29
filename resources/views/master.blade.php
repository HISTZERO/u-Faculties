<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý Giảng Viên</title>
  <base href="{{asset('')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="source/css/style.css">
  <link rel="stylesheet" type="text/css" href="source/css/w3.css">
  <!-- fonts awesome -->
  <link rel="stylesheet" href="source/assets/font/css/font-awesome.min.css" type="text/css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- <script src="source/js/jquery-1.11.1.min.js"></script> -->

  <style type="text/css">
  </style>

</head>
<body>
	@include('header')
	@yield('content')
  @include('footer')
  <script src="source/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="source/js/bootstrap.min.js"></script>
</body>
</html>


<style type="text/css">
html {
  overflow-x: hidden;

}
body {
  font-family: 'Arial', sans-serif;
  background: #FFFFFF;
  width: 100%;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  display: block;
}

h1, h3, ul, li, img, a, div {
  margin: 0;
  padding: 0;
}

ul, ol {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

a {
  text-decoration: none;
  transition: all 0.6s ease-in-out;
}
img {
  max-width: 100%;
}
.clearfix:after {
  display: block;
  content: "";
  clear: both;
}


header {
  display: block;
}


.container {
  max-width: 1140px;
  margin: auto;
  display: block;
}

.header-top {
  padding: 18px 0px;
}
.logo {
  display: inline-block;
  float: left;
}

.logo img {
  width: 125px;
}

.web-title {
  display: inline-block;
  box-sizing: border-box;
  margin-top: 22px;
  margin-left: 13px;
}

.web-title h1 {
  font-size: 35px;
}


.web-title h3 {
  font-weight: normal;
  line-height: 35px;
  color: #5B5B5B;
}

.uni-logo {
  display: inline-block;
  float: right;
}

.uni-logo img {
  width: 110px;
}

.header-bot {
  border-top: 1px solid #e2e2e2;
  border-bottom: 0.99px solid #e2e2e2;

}

.menu li {
  position: relative;
  float: left;
}

.menu > li a {
  color: #555;
  font-size: 13px;
  font-weight: normal;
  padding: 18px 15px;
  display: inline-block;
  border-top: 4px solid transparent;
  box-sizing: border-box;
  transition: all 0.6s ease-in-out;

}

.menu > li > a:hover, .menu > li > a.current,
.menu > li:hover > a {
  border-top-color: #015198;
  background: #F2F2F2;
  color: #015198;
}

main {
  background: #EEEEEE;
  padding-top: 12px;
}

main .main-top .container {
  background: #FFFFFF;
  padding-bottom: 20px;
}






footer {
  background: #333333;
  display: block;
  margin: 0;
  padding: 0;
}

.
.info {
  display: inline-block;
  float: right;
  max-width: 66.67%;
}

.info p {
  margin: 0px;
  font-size: 13px;
  padding: 40px 0;
  color: #999999;
  line-height: 25px;
}


</style>