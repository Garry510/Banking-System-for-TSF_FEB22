<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/send.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#867e36;
		padding:50px;
		border-radius: 25px;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Aman"){
				 var arr=["Harshal","Yogesh","Vishal","Vaishali","Tapendra","Sara","Nisha","Anupam","Gaurav"];
				 }
				 else if(a==="Harshal"){
					var arr=["Aman","Yogesh","Vishal","Vaishali","Tapendra","Sara","Nisha","Anupam","Gaurav"];
				}
				else if(a==="Yogesh"){
					var arr=["Aman","Harshal","Vishal","Vaishali","Tapendra","Sara","Nisha","Anupam","Gaurav"];
				}
				else if(a==="Vishal"){
					var arr=["Aman","Harshal","Yogesh","Vaishali","Tapendra","Sara","Nisha","Anupam","Gaurav"];
				 }
				 else if(a==="Vaishali"){
					var arr=["Aman","Harshal","Yogesh","Vishal","Tapendra","Sara","Nisha","Anupam","Gaurav"];
				 }
				 else if(a==="Tapendra"){
					var arr=["Aman","Harshal","Yogesh","Vishal","Vaishali","Sara","Nisha","Anupam","Gaurav"];
				 }
				 else if(a==="Sara"){
					var arr=["Aman","Harshal","Yogesh","Vishal","Vaishali","Tapendra","Nisha","Anupam","Gaurav"];
				 }
				 else if(a==="Nisha"){
					var arr=["Aman","Harshal","Yogesh","Vishal","Vaishali","Tapendra","Sara","Anupam","Gaurav"];
				 }
				 else if(a==="Anupam"){
					var arr=["Aman","Harshal","Yogesh","Vishal","Vaishali","Tapendra","Sara","Nisha","Gaurav"];
				 }
				 else if(a==="Gaurav"){
				 var arr=["Aman","Harshal","Yogesh","Vishal","Vaishali","Tapendra","Sara","Nisha","Anupam"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#ffa500;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Aman">Aman</option>
			<option value="Harshal">Harshal</option>
			<option value="Yogesh">Yogesh</option>
			<option value="Vishal">Vishal</option>
			<option value="Vaishali">Vaishali</option>
			<option value="Tapendra">Tapendra</option>
			<option value="Sara">Sara</option>
			<option value="Nisha">Nisha</option>
			<option value="Anupam">Anupam</option>
			<option value="Gaurav">Gaurav</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>