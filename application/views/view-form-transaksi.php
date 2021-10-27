<html>
<head>
    <title>Form Input Sepatu</title>
</head>
    <marquee width="100%" bgcolor="#DA70D6">
        <h3><font color="black">Selamat Datang di Toko Sepatu!</marquee></font></h3>
<body>
<pre>
<form action="<?= base_url('transaksisepatu/output'); ?>" method="post">
    Nama Pembeli    :<input type="text" name=nama placeholder="Contoh : Ahmad Zaenul"><br>
    No Hp           :<input type="text" name=no_hp placeholder="Contoh : 08xxxxxxxxxx"><br>
    Merk Sepatu     :<select name="merk">
                        <option value="-Select-">Select Sepatu</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                        <option value="Bucherri">Buchheri</option>
                        </select><br> 
    Ukuran Sepatu   :<?php
					echo "<select name = ukuran>";
					echo "<option value=x>Ukuran</option>";
					for ($ukuran=32; $ukuran <=44 ; $ukuran++) { 
					echo "<option value=".$ukuran.">".$ukuran."</option>";
					}
					echo "</select>";
                    ?><br>
                    <input type="submit" value="Submit" value="Save"><input type="reset" value="Reset">
</form>
</pre>
</body>
</html>