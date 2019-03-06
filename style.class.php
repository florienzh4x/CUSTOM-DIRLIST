<?php 

class DirList{
	public static function List($Dir, $File, $Self){
		$filename = str_replace($Dir."/", "", $File);
		echo '<!DOCTYPE html>
		<html>
		<head>
		<style type=\'text/css\'>
				body       {background-color:#1b1b1b; color:#CCCCCC; font-family: \'Courier New\', Courier, monospace; font-size: 10pt; padding:5px;}
				h2         {margin-bottom: 12px;}
				a, a:active {text-decoration: none; color:#009E99;}
				a:visited   {color: #007070;}
				a:hover, a:focus {text-decoration: none; color:#CCCCCC;}
				a img		{border:none;}
				table      { }
				th, td     { text-align:left; }
				th         { font-weight: bold; padding-right: 14px; padding-bottom: 3px;}
				td         {padding-right: 14px;}
				td.s, th.s {text-align: right;}
		    	.kanan {text-align: right;padding-left:100px;}
		</style>
		</head>
		<body>
		<h1>Index of '.str_replace($filename, '', $Self).'</h1><hr><table>';
		$scan = array_diff(scandir($Dir), array('.', $filename));
		foreach ($scan as $list) {
			echo "<tr><td style='padding-right:50px;'>[".strtoupper(filetype($list))."]<td><a href='$list'>$list</a></td><td class='kanan'>".date('F d Y H:i:s', filemtime($list))."</td></tr>";
		}
		echo "</table>
		    <hr> <address>".$_SERVER['SERVER_SOFTWARE']." Server at ".$_SERVER['HTTP_HOST']." Port ".$_SERVER['SERVER_PORT']." - Created by <a href='https://fb.com/florienzh4x' target='_blank'>Florienzh4x</a></address></body></html>";	
	}
}
