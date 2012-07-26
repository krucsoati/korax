<table border="0" width="900" cellspacing="0" cellpadding="0" height="400">
	<tr>
		<td width="300" height="400%">
                    <a href="<?php print url_for('amerin_mugyantas_padlok') ?>" style="text-decoration: none;">
                    <p align="left" style="margin-top: 0; margin-bottom: 0">&nbsp;&nbsp;&nbsp;&nbsp;
		<b><font color="#004D06" size="4">Műgyantás padlók</font></b></p>
		<p align="center" style="margin-top: 0; margin-bottom: 0">
		<img border="0" src="/img/padlo_01.jpg" width="290" height="330"></p>
		</a></td>
		<td width="300" height="400">
                    <a href="<?php print url_for('lakosagi_termekek') ?>" style="text-decoration: none;">
		<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
		<font size="4" color="#004D06">Lakosság termékek</font></b></p>
		<p align="center" style="margin-top: 0; margin-bottom: 0">
		<img border="0" src="/img/lakossagi_01.jpg" width="290" height="330">
                </a></td>
		<td width="300" height="400">
                    <a href="<?php print url_for('villamos_ipari_mugyantak') ?>" style="text-decoration: none;">
		<p align="right" style="margin-top: 0; margin-bottom: 0"><b>
		<font color="#004D06" size="4">Villamosipari műgyanták&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b></p>
		<p align="center" style="margin-top: 0; margin-bottom: 0">
		<img border="0" src="/img/villamosipari_01.jpg" width="290" height="330"></p>
		</a>
                    </td>
	</tr>
</table>

    <div class="news_box" >
	<p class="news_item news_box_title"><?php print $news[0]->getTitleHu() ?></p>
	<p class="news_item news_box_news" ><?php print $news[0]->getNewsHu() ?></p>
	<p class="news_item news_box_link" ><a href="#">Bővebben</a></p>
    </div>
    <div style="float: left">
	<img border="0" src="/img/elvalaszto.jpg" width="10" height="170"></p>
    </div>
    <div class="news_box" >
	<p class="news_item news_box_title"><?php print $news[0]->getTitleHu() ?></p>
	<p class="news_item news_box_news" ><?php print $news[0]->getNewsHu() ?></p>
	<p class="news_item news_box_link" ><a href="#">Bővebben</a></p>
    </div>

