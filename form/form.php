<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form creation</title>
	<script type="text/javascript" src="javascript/formvalid.js"></script>
	<style type="text/css">
     		
     .tt
     {
     	background: rgba(0, 0, 0, 0.4);
     	padding: 20px;
     	width: 60%;
     	border-radius:5px;
     	margin: auto;
     }
     .tt:hover
     {
     	background: rgba(266, 0, 0, 0.8);
     }
 /* table td tr th
 {
	border:0;  anether way to cpllaps
 	} */

		table td{
           background:lightblue;
           padding:6px;
          

		}
		table td:hover
		{
			background: yellowgreen;
		}
		table th
		{
			background:yellowgreen;
			text-align: left;
			
			padding: 6px;
		}
		table th:hover
		{
			background:lightblue ;
		}
		table, tr,td
		{
		  border-collapse: collapse;
		}
	</style>
</head>
<body>

	<h1 align="center">welcome users</h1>
<section class="tt">
     <form method="Post" action="formlogic.php?pageno=1" name="form" encrypt="multipart/form-data">
	<table align="center" >
		<tr>
			<td>First name</td>
			<th><input type="text" name="firstname" id="fname"></th>	
	    </tr>
        <tr>
			<td>last name</td>
			<th><input type="text" name="lastname" id="sname"></th>		
		</tr>
		<tr>

			<td>Email</td>
			<th><input type="Email" id="mail" name="email"></th>
	    </tr>
	    <tr>

			<td>Number</td>
			<th><input type="text" id="num" name="mobile"></th>
	    </tr>
        <tr>
			<td>Gender</td>
			<th><input type="radio" name="gender" class="male" id="m"><span>Male</span>
		    <input type="radio" name="gender" class="femail" id="f"><span>Female</span></th>
		</tr>
		<tr>

		    <td>Hobbies</td>
			<th><input type="checkbox" id="cri" name="hobbies"><span>cricket</span>
		    <input type="checkbox"  id="che"><span>chess</span>
		    <input type="checkbox"  id="foot"><span>football</span></th>
		</tr>
		<tr>
		    <td>city</td>
		    <th>
		    	<select id="city" name="city">
		    		<option >select</option>
		    		<option value="vns">vns</option>
                    <option value="luck">luck</option>

		    	</select></th>
		   </tr>
		   <tr>
		   	<td>Address</td>
		   	<th><textarea style="text" id="add" name="address"></textarea></th>
		   </tr> 
		    <tr>
		   	<td>Password</td>
		   	<th><input style="text" id="pass1" type="password" name="password"></input></th>
		   </tr>
		    <tr>
		   	<td>conf-Password</td>
		   	<th><input style="text" id="pass2" type="password"></input></th>
		   </tr>
		   
		<tr>
			<td>upload</td>
			<th><input type="file" name="" id="upload" name="upload"></th>
		</tr>
		<tr >
			<td></td>
			<th colspan="2" style="text-align: center;"><input type="button" value="submit" name="" onclick="fun()" ></th>
		</tr>
		<tr>
			<td></td>
			<th colspan="2" style="text-align: center; padding:5px; background: rgba(0, 255, 0, 0.5);"><a href="table.html">click to view the content</a></th>
		</tr>
		   
	</table>
			   	
</form>
</section>
<!--<section>
	<ul type="disc">
		<li>name </li>
	    <li>class </li>
        <li>content</li>

	</ul>
	<ul type="square">
		<li>name </li>
	    <li>class </li>
        <li>content</li>

	</ul>
	<ul type="circle">
		<li>name </li>
	    <li>class </li>
        <li>content</li>

	</ul>
</section>
			   
//for ol=1,i,a,A
//border collasps for  css-->
<section class="add" style="text-align:center; margin-top: 5px; ">
	<input type="submit" name="" onclick="add(2,3)">
	
</section>
</body>
</html>