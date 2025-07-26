<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>

<style>
h1, h3{
  color: darkblue;
  font-family: 'Times New Roman', Times, serif;
}

body{
    background-color: lightblue;
    font-family: Arial, Helvetica, sans-serif;
}

table{
  background-color: white;
  margin: 2px;
  border: 1px solid black;
  padding: 10px;
}
div {
  background-color: lightblue;
  width: 190px;
  height: 60px;
  border: 1px solid red;
  overflow: scroll;
}

</style>


</head>

<body>
    <center>
        <h1>Bank Management System</h1>
        <h3>Your Trusted Financial Partner</h3>
    </center>
    
            <tr>
                <td><p><b>Customer Registration Form</b></p></td>
            </tr>

    <table>
        <form action="">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="" placeholder="Enter Full Name" id=""></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="des">Male
                    <input type="radio" name="des">Female
                    <input type="radio" name="des">Other
                 </td>
            </tr>

            <tr>
                <td>Marital Status:</td>
                <td>
                    <select>
                        <option value="">Single</option>
                        <option value="">Married</option>
                    </select>
                 </td>
            </tr>

            <tr>
                <td>Account Type:</td>
                <td>
                    <select>
                        <option value="">Savings</option>
                        <option value="">Fixed</option>
                    </select>
                 </td>
            </tr>
 
             <tr>
                <td>Initial Deposit Amouct:</td>
                <td><input type="text" placeholder="Enter amoount" name="" id=""></td>
            </tr>  
         
             <tr>
                <td>Mobile Number:</td>
                <td><input type="text" placeholder="Enter mobile no" name="" id=""></td>
            </tr> 

             <tr>
                <td>Email Adress:</td>
                <td><input type="text" placeholder="Enter email" name="" id=""></td>
            </tr>
            
            <tr>
                <td>Adress:</td>
                <td><textarea name="adress" id=""></textarea></td>
            </tr>

             <tr>
                <td>Occupation:</td>
                <td><input type="text" name="" id=""></td>
            </tr>

             <tr>
                <td>National ID (NID):</td>
                <td><input type="text" name="" id=""></td>
            </tr>

            <tr>
                <td>Set Password</td>
                <td><input type="password" placeholder="Set password" name="" id=""></td>
            </tr>

            <tr>
                <td>Upload ID Proof:</td>
                <td><input type="file" name="" id=""></td>
            </tr>

            <tr>
                <td><input type="checkbox" name="" id=""> I agree to terms and conditions</td>
            </tr>

            <tr>
                <td>
                    <input type="button" value="Register">
                    <input type="button" value="Clear">
                </td>
            </tr>

            <tr>
                <td><div>This is a demo text to show the overflow works
                    in a small contants with a ...........
                </div></td>
            </tr>


        </form>
    </table>
</body>
</html>