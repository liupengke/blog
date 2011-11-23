<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form method="post" action="__URL__/insert">
    title:<input type="text" name="title"><br>
    content:<textarea name="content" rows="5" cols="25"></textarea><br>
    <input type="submit" value="submit">
</form>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>id:<?php echo ($vo["id"]); ?><br>
    title:<?php echo ($vo["title"]); ?><br>
    content:<?php echo ($vo["content"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>