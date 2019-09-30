<?php
$hostname = "localhost";
$database = ""
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sigup</title>
</head>

<body>
    <form action="#" method="post" name="form">
        <table width="68%" border="0" cellpadding="0">
            <tr>
                <td width="33%">First Name</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <tr>
                <td width="33%">Last Name</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <tr>
                <td width="33%">Email</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <tr>
                <td width="33%">User Id</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <tr>
                <td width="33%">Password</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <tr>
                <td width="33%">Confirm Password</td>
                <td width="3%"> : </td>
                <td width="64%"><input name="txtNama" type="text" id="txtNama"></input></td>
            </tr>
            <script type="text/javascript">
                function fungsi_satu() {
                    var a = document.getElementById("div_CREATE");
                    a.innerHTML += "<p></p>";
                }
            </script>


        </table>
        <div id="div_CREATE"> <button id="tambah" onclick=" 
        fungsi_satu()">CREATE</button></div>

    </form>
</body>

</html>