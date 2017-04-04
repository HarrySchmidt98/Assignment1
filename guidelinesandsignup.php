<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#FormDiv {
	width: 400px;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-top: 60px;
	background: #FFFD00;
}	
</style>
</head>

<body>
<div id="FormDiv" ><form action="sendemail.php" method="post" id="signupform">
  <table width="378" border="1" align="center">
    <tbody>
      <tr>
        <th colspan="2" scope="row">SIGN UP</th>
        </tr>
      <tr>
        <th width="133" scope="row">Contact name:</th>
        <td width="229"><input name="textfield" type="text" required="required" id="contactname"></td>
      </tr>
      <tr>
        <th scope="row">Contact number:</th>
        <td><input name="number" type="number" required="required" id="contactnumber"></td>
      </tr>
      <tr>
        <th scope="row">Contact email:</th>
        <td><input name="email" type="email" required="required" id="contactemail"></td>
      </tr>
      <tr>
        <th scope="row">Competition day:</th>
        <td><select name="select" required="required" id="compday">
          <option>Monday</option>
          <option>Sunday</option>
          <option>Either</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">Competition time:</th>
        <td><select name="select2" required="required" id="comptime">
          <option>Afternoon</option>
          <option>Evening</option>
          <option>Either</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">Team name:</th>
        <td><input name="textfield" type="text" required="required" id="teamname"></td>
      </tr>
      <tr>
        <th colspan="2" scope="row">Guidelines</th>
        </tr>
      <tr>
        <th colspan="2" scope="row">Participants in Slammers Beach Volleyball play at their own  risk. Anyone playing is responsible for their own safety and should only play  if they are capable. Check with your doctor before you begin.<br>
Game fees must be paid prior to the start of the game. Games  may be cancelled by players up to 4 hours before hand to get a refund. Without  4 hours' notice, participants will forfeit the game and be charged 50% of the  game fee.</th>
        </tr>
      <tr>
        <th colspan="2" scope="row"><input name="checkbox" type="checkbox" required="required" id="checkbox">
          I have read and i understand the guidelines.</th>
        </tr>
      <tr>
        <th colspan="2" scope="row"><input type="button" name="Submit" id="Submit" value="sendmessage"></th>
        </tr>
    </tbody>
  </table> 
</form></div>
</body>
</html>