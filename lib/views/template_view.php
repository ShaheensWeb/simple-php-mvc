<html>
<head>
<title>Simple PHP MVC Demo</title>
<script type="text/javascript" src="static/js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="static/js/main_script.js"></script>
</head>
<body>
<h1>Simple PHP MVC Demo</h1>
<hr />
<a href="index.php" class="content_link">Home</a> | 
<a href="guestbook.php" class="content_link">Guestbook</a>
<hr />
<div id="page_content"><?php echo $body ?></div>
</body>
</html>