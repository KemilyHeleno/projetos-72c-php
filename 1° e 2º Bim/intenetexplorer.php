<html>
<head><title>Aprendendo PHP</title></head>
<body>
<?
if (strpos($HTTP_USER_AGENT,"MSIE 5") != 0) {
 echo "Você usa Internet Explorer";
} else {
 echo "Você não usa Internet Explorer";
}
?>
</body>
</html>