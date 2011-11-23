<?php /* Smarty version 2.6.22, created on 2011-11-13 16:11:48
         compiled from default/Create/index.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<?php echo $this->_tpl_vars['anum']; ?>
=ppp;
<br>
<?php echo $this->_tpl_vars['test']; ?>

<form action="/poker/index.php/Create/submit" method="post">
<textarea id="editor" name="content"></textarea>
<input type="submit" value="go">
</form>
<script>
CKEDITOR.replace( 'editor' );
</script>
</body>
</html>