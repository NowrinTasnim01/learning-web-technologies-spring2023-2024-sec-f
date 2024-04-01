
<html><head>
    <title>
        invoice
</title>
</head>
<body>
    
        <form method="post" action="validinvoice.php" enctype="">
            <fieldset width=100>
                <legend align="center"> invoice</legend>
                <h1 align="center">Quick Eagle Courier Service<h1>
                    <h2 align="center">ka,74 kuril Dhaka,1229<h2>
                    <h3 align="center">"quickeagle101@gmail.com"<h3><hr>
<table  align="left"><br>
                        <tr>
             <td>Sender Name:</td>
             <td><input type="text"placeholder="Name" name="snmae"value=""/</td></tr>
             <td> Sender Address:</td><td>
             <input type="text"placeholder="address" name="saddress"value=""/></td><tr>
             <td>Phone number:</td>
             <td><select><option>+880</option></select></td>
             <td><input type="Phone" name="pno"value=""/></form></td></tr>
             <td>Date:</td>
             <td><input type="date" name="dob"value=""/></form></td></tr>
</table>
<table  align="right"><tr>
                <td>Recevier Name:</td>
                <td><input type="text"placeholder="Name" name="rnmae"value=""/></td></tr>
                    
                <td>Recevier Address:</td>
                <td><input type="text"placeholder="address" name="raddress"value=""/></td><tr>
                <td>Phone number:</td>
                <td><select><option>+880</option></select></td>
                <td><input type="number" name="pno"value=""/></form></td></tr>

                    
                    <td>Date:</td>
             <td><input type="date" name="dob"value=""/></form></td></tr>
</td></table>
               
             
                <table border=5>
                    <tr>
                        <td> 
                Iteam No:<input type="number" name="iteam"value=""required/><br><br>
</td>
<td>
                Product Description:<input type="text" name="pd"value=""/><br><br>
</td>
<td>
                Quantity:<input type="text" name="quantity"value=""required/><br><br>
</td>
<td>
                Price:<input type="text" name="price"value=""required/><br><br>
</td>
<td>
                payment:<input type="text" name="payment"value=""required/><br><br>
</td>
</tr>
</table><br>
                <input type="submit"name="submit"value="ADD"/>
            </fieldset>
        </form>
        <input type="submit"name="submit"value="submit"/>

</body>
    </html>