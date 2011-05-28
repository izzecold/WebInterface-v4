<?php
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if($_SESSION['user_type'] == 0) {
	?>
    <script type="text/javascript">
	
		function PopUp(w,h,ziel) {
			h = h - 20; var x=0, y=0, parameter="";
			if (w < screen.availWidth || h < screen.availHeight) {
				x = (screen.availWidth - w - 12) / 2;
				y = (screen.availHeight - h - 104) / 2;
				if (window.opera) y = 0; // Opera positioniert unter den Symbolleisten
				if (x<0 || y<0) { x=0; y=0; }
				else parameter = "width=" + w + ",height=" + h + ",";
			}
			parameter += "left=" + x + ",top=" + y;
			parameter += ",menubar=yes,location=yes,toolbar=no,status=yes";
			parameter += ",resizable=yes,scrollbars=yes";
			var Fenster = window.open(ziel,"PopUp",parameter);
			if (Fenster) Fenster.focus();
			return !Fenster;
		}
	
		function modBG(divID,Color) {
			document.getElementById(divID).style.backgroundColor = Color;
			document.getElementById(divID).style.cursor = 'pointer';
		}
	</script>
<table border="0" cellpadding="0" cellspacing="0" style="width:615px; margin: 3px; float: none;" align="left">
<tr style="height: 32px;"><td onClick="PopUp('600','450','templates/news/add.php')" onMouseOver="modBG('add_news_td','#FFF')" onMouseOut="modBG('add_news_td','#F0F0F0')" id="add_news_td" style="width: 32px; border: 1px solid #CCC; background: #F0F0F0; padding-left: 5px; font-size: 14px;">
<a href="#" onMouseOver="modBG('add_news_td','#FFF')" onMouseOut="modBG('add_news_td','#F0F0F0')">Neuigkeit schreiben!</a>
</td></tr>
</table>


    <?
}
?>
<table border="0" cellpadding="0" cellspacing="0" style="width:615px; margin: 3px;" align="left">
<tr style="height: 32px;">
	<td style="width: 32px; border-left: 1px solid #CCC; border-top: 1px solid #CCC; background: #F0F0F0;"><img src="../images/templates/news/icons/green.png"></td><td align="left" style="width: auto; padding-left: 15px; border-top: 1px solid #CCC; border-right: 1px solid #CCC; background: #F0F0F0;"><span style="font-size: 16px; font-weight: bold; font-style: italic;">Erste News!</td></td>
</tr>
<tr>
	<td colspan="2" style="padding-left: 25px; padding-top: 5px; border: 1px solid #CCC; background: #FAFAFA;">
    	Der Text der ersten News folgt hier!
    </td>
</tr>
</table>