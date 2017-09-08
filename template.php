<?php
echo ('<!DOCTYPE html>'."\xA");
echo ('<HTML>'."\xA");
echo ('<HEAD>'."\xA");
echo ('<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">'."\xA");
echo ('<TITLE>SQL Table</TITLE>'."\xA");
echo ('</HEAD>'."\xA");
echo ('<BODY>'."\xA");

$link = mysql_connect('127.0.0.1', 'root', '1');
if (!$link) {
	die('Connection ERROR: '.mysql_error());
	}
	
//echo 'Connection DONE';
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_select_db('saee', $link);

echo "<table border=0 cellpadding=0 cellspacing=0 style=width:100%>";
echo "<tr align=center><td><b>Agency Directory [Template]</b></blockquote></td></tr>";
echo "</table>";

 $query_body = mysql_query('SELECT * FROM shtat_body');
if (!$query_body) { die('Query ERROR: ' . mysql_error()); }
  while ($var = mysql_fetch_array($query_body)) 
      {
      echo "
              <table border=1 cellpadding=0 cellspacing=0 style=width:100%>
              <tr align=center>
              <td width=05%>
              <b> $var[id] </b>
              <td  width=25%>
              <b>$var[position]</b>
              </td>
              <td width=30%>
              <b>$var[fname]</b>
              </td>
              <td width=10%>
              <b>$var[nroom]</b>
              </td>
              <td width=05%>
              <b>$var[inphone]</b>
              </td>
              <td width=15%>
              <b>$var[exphone]</b>
              </td>
              </tr>";
       }

// Golova
// Head
$query_worker = mysql_query('SELECT * FROM shtat_worker WHERE code = 1');
if (!$query_body) { die('Query ERROR: ' . mysql_error());  }
  while ($var = mysql_fetch_array($query_worker)) 
      {
       echo "
              <tr align=center>
              <td rowspan=1>
              $var[code]
              </td>
              <td  rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[position]
              </td>
              <td rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[name]
              </td>
              <td>
              $var[room]
              </td>
              <td>
              $var[noroom]
              </td>
              <td>
              $var[nophone]
              </td>
              </tr>";
      }

// Assistant right
$query_worker = mysql_query('SELECT * FROM shtat_worker WHERE code = 2');
if (!$query_body) { die('Query ERROR: ' . mysql_error());  }
  while ($var = mysql_fetch_array($query_worker)) 
      {
       echo "
              <tr align=center>
              <td rowspan=1>
              $var[code]
              </td>
              <td  rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[position]
              </td>
              <td rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[name]
              </td>
              <td>
              $var[room]
              </td>
              <td>
              $var[noroom]
              </td>
              <td>
              $var[nophone]
              </td>
              </tr>";
      }    

// Assistant left
$query_worker = mysql_query('SELECT * FROM shtat_worker WHERE code = 3');
if (!$query_body) { die('Query ERROR: ' . mysql_error());  }
  while ($var = mysql_fetch_array($query_worker)) 
      {
       echo "
              <tr align=center>
              <td rowspan=1>
              $var[code]
              </td>
              <td  rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[position]
              </td>
              <td rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[name]
              </td>
              <td>
              $var[room]
              </td>
              <td>
              $var[noroom]
              </td>
              <td>
              $var[nophone]
              </td>
              </tr>";
      }    


// 4. Department of Head Office and Office Management
 $query_depart = mysql_query('SELECT * FROM shtat_depart WHERE id = 4');
if (!$query_depart) { die('Query ERROR: ' . mysql_error()); }
while ($var = mysql_fetch_array($query_depart)) 
      { 
        echo "
           <b><tr><td colspan=6 align=left width=100%><blockquote><b>$var[id]. $var[depart] </b></blockquote></td></tr>";
       }

// 4. Department of Head Office and Office Management Workers
$query_worker = mysql_query('SELECT * FROM shtat_worker WHERE code = 4');
if (!$query_body) { die('Query ERROR: ' . mysql_error());  }
  while ($var = mysql_fetch_array($query_worker)) 
      {
       echo "
              <tr align=center>
              <td rowspan=1>
              $var[code]
              </td>
              <td  rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[position]
              </td>
              <td rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[name]
              </td>
              <td>
              $var[room]
              </td>
              <td>
              $var[noroom]
              </td>
              <td>
              $var[nophone]
              </td>
              </tr>";
      }    

// 5. Internal Audit Section
$query_depart = mysql_query('SELECT * FROM shtat_depart WHERE id = 5');
if (!$query_depart) { die('Query ERROR: ' . mysql_error()); }
while ($var = mysql_fetch_array($query_depart)) 
      { 
        echo "
           <b><tr><td colspan=6 align=left width=100%><blockquote><b>$var[id]. $var[depart] </b></blockquote></td></tr>";
       }
// 5. Internal Audit Section Workers
$query_worker = mysql_query('SELECT * FROM shtat_worker WHERE code = 5');
if (!$query_body) { die('Query ERROR: ' . mysql_error());  }
  while ($var = mysql_fetch_array($query_worker)) 
      {
       echo "
              <tr align=center>
              <td rowspan=1>
              $var[code]
              </td>
              <td  rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[position]
              </td>
              <td rowspan=1 align=left>
              &nbsp;&nbsp;&nbsp;$var[name]
              </td>
              <td>
              $var[room]
              </td>
              <td>
              $var[noroom]
              </td>
              <td>
              $var[nophone]
              </td>
              </tr>";
        }
mysql_close($link);

echo "</table>";
echo('</BODY>');
echo('</HTML>');
?>

<h2> ... </h2>
