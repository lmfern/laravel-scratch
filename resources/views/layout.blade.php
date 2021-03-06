<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<!-- Linking to the css files like this href="fonts.css" will look in the /public directory. Below, we've moved 
those files to their own directory within the /public directory. -->
<link href="/css/default.css" rel="stylesheet" />
<link href="/css/fonts.css" rel="stylesheet" />
<!-- by yielding head below, now any view that wants to hook in to where we render this head section can do so
this is useful if you want to pull in a script or stylesheet only for one view, not the entire site.
see -->
@yield('head')
</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="/">SimpleWork</a></h1>
    </div>
    <div id="menu">
      <ul>
        <!-- If the path is the homepage, in that case echo out to the current home page, if not don't echo anything. Same for other menu li items.  -->
        <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
        <li class="{{ Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
        <li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
        <li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">Articles</a></li>
        <li class="{{ Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
      </ul>
    </div>
  </div>
</div>
@yield('content')

<div id="copyright" class="container">
  <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
