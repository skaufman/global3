<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Demo</title>
<!--import css -->
<link rel="stylesheet" type="text/css" href="Style.css" />
<!--import jquery lib -->
<script language="JavaScript" src="jquery-1.3.2.min.js"></script>
<!--import a corner plugin-->
<script language="JavaScript" src="jquery.corner.js"></script>
<!--import a AjaxFlagMenu plugin -->
<script language="JavaScript" src="AjaxFlagMenu-1.0.2.min.js"></script>

<script language="JavaScript">
	
	$(document).ready(function(){
		
		var Menu = $("#_Menu").AjaxFlagMenu({
			Caption:'Menu',
			CaptionClass:'CaptionClass',
			onOutClass:'onOutClass',
			onOverClass:'onOverClass',
			onClickClass:'onClickClass',
			hscOutClass:'hscOutClass',
			hscClickClass:'hscClickClass',
			Loading_gif:'src/Loading.gif',
			ajaxContent:'ajaxContent'
		});
	//Comentaire
	var Commentaire = Menu.add({
		Title:'Commentaire',
		onOutIcon:'src/com_d.png',
		onClickIcon:'src/com_c.png',
		HtmlSatusContent:'10',
		url:'pages/commentaire.php',
		data:''
	});
	Commentaire.sethscCorner();
	//Evenement
	Menu.add({
		Title:'Evenement',
		onOutIcon:'src/event_d.png',
		onClickIcon:'src/event_c.png',
		HtmlSatusContent:'',
		url:'pages/evenement.php',
		data:''
	});
	//Lien
	Menu.add({
		Title:'Lien',
		onOutIcon:'src/link_d.png',
		onClickIcon:'src/link_c.png',
		HtmlSatusContent:'',
		url:'pages/lien.php',
		data:''
	});
	//Aide
	Menu.add({
		Title:'Aide',
		onOutIcon:'src/help_d.png',
		onClickIcon:'src/help_c.png',
		HtmlSatusContent:'',
		url:'pages/aide.php',
		data:''
	});
	
	$("#_td").corner("4px");
	
	});
	
</script>

</head>
<body>
<table width="100%" border="0">
  <tr style="padding:50%">
    <td id="_td" width="50%" style="border:2px solid #3B59B6 ; padding:10px;"><div style="width:180px;" id="_Menu"></div></td>
  </tr>
  <tr>
    <td colspan="2"><div id="ajaxContent"></div></td>
  </tr>
  <tr>
    <td colspan="2"><div  style="padding:50px;">
<b>Supported Browser(without corner plugin)</b><br>
-Google Chrome<br>
-Firefor<br>
-Flock<br>
-IE<br>
-Opera<br>
-Safari<br>
<b>Supported Browser(with corner plugin)</b><br>
-Google Chrome<br>
-Firefor<br>
-Flock<br>
-Safari<br>
</div></td>
  </tr>
</table>

</body>
</html>