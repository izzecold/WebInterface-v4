<?

?>
<style type="text/css">
.add_news_tbl tr td {
	padding: 5px;
	border: 1px solid #FFF;
	background: #F0F0F0;
}
</style>
<table class="add_news_tbl" border="0" cellpadding="0" cellspacing="0" width="80%" align="center">
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
<tr>
	<td><strong>Titel</strong></td>
    <td>
	<input type="text" name="title">
    </td>
</tr>
<tr>
	<td><strong>Beschreibung</strong></td>
    <td>
    <input type="text" name="desc">
    </td>
</tr>
<tr>
	<td><strong>Icon</strong></td>
    <td>
    <input type="radio" name="icon" value="green"> <img src="../../images/templates/news/icons/green.png">
	<input type="radio" name="icon" value="orange"> <img src="../../images/templates/news/icons/orange.png">
	<input type="radio" name="icon" value="red"> <img src="../../images/templates/news/icons/red.png">
    </td>
</tr>
</form>
</table>