<html>
<head>
	<title>Blade 页面布局(父模板)</title>
</head>
<body>
<blade name="content"/>
<widget name="header">
	头部内容(父页面 widget标签内容) {{title}}
</widget>
<widget name="footer">
	底部内容(父页面 widget标签内容)
</widget>
</body>
</html>