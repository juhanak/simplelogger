<html>
<head>
<style>
ul{
margin:10px 0px;
padding:0px;
}
#navlist li
{
display: inline;
list-style-type: none;
padding-right: 20px;
padding-left:0px;

}
.codeblock
{
	color: #333;
	background-color: #fff;
	padding: 10px;
	border: 1px solid #666;
	width: 20em;
	font-family: courier, "courier new", monospace;
	line-height: 120%;
	margin:10px 0px;
}
#content
{
	margin: 10px 0 20px 30px;
}
a, a:hover, a:visited { color: black; text-decoration: none; text-transform: uppercase; color:blue;}

</style>
</head>
	<body>
	<div id="content">
	<ul id="navlist">
	<?php foreach($GLOBALS['files'] as $file): ?>
		<li><a href="logger.php?file=<?=$file?>"><?=$file?></a></li>
	<?php endforeach; ?>
	</ul>
	<div class="codeblock">
	<pre><?php echo $GLOBALS['content'] ?></pre>
	</div>
	<?php if(isset($GLOBALS['selected_file'])): ?>
		<a href="logger.php?delete=<?=$GLOBALS['selected_file']?>">Delete selected log</a>
	<?php endif; ?>
	</div>
	</body>
</html>