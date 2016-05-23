 <?php  

//Toomas R, phpkursus2016

echo '
<html>

<body bgcolor=AliceBlue text=DarkGoldenRod link=DarkSlateGray></body>


<h3>Kangelase sisestamine vorm</h3>

<form method=post>

<table border=1>

<tr>
  <td>Nimi:</td>
  <td><input type=text name="name"></td>
</tr>
<tr>
  <td>Klass:</td>
  <td>
  <select name=language>
  <option></option>
  <option>Algaja</option>
  <option>Spetsialist</option>
  <option>Äss</option>
  <option>Proff</option>
  </select>
  </td>
</tr>
<tr>
  <td>Rass:</td>
  <td>
  <select name=language>
  <option></option>
  <option>Tulnukas</option>
  <option>Haldjas</option>
  <option>Nõid</option>
  <option>Libahunt</option>
  </select>
  </td>
</tr>
<tr> 
<td>Sugu:</td> 
<td><input type="radio" name="gender" value="naine">Naine
<input type="radio" name="gender" value="mees">Mees</td>
</tr>
<tr><td>Lemmikloom kaasas:</td> 
<td><input type="checkbox" name="vares">vares<br />
<input type="checkbox" name="konn">konn<br />
<input type="checkbox" name="madu">madu<br />
<input type="checkbox" name="ämblik">ämblik<br />
<input type="checkbox" name="skorpion">skorpion</td> 
</tr> 
<tr> 
<tr>
  <td>Kirjeldus:</td>
  <td><textarea name=comment cols=25 rows=7>Siia sisesta kirjeldus</textarea></td>
</tr>
</table>
<input type=submit name=nupp value=Sisesta>
</form>
';
?>