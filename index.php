<!DOCTYPE html>
<html>
    
    <head>
        
        <title> Simple calculator</title>
        <link rel="stylesheet" type="text/css" href="style.css">   
            
    </head>
    <body>
        
        <h1>Simple Calculator</h1>
        
        <form id="calform" Name ="cal">
            <input name ="display" style="width:675px;height:100px;text-align:center;background-color:#1f80c9;"> </br>
            <input type=button value="0" onClick="cal.display.value+='0'"> 
			<input type=button value="1" onClick="cal.display.value+='1'">
			<input type=button value="2" onClick="cal.display.value+='2'">
		    <input type=button value="+" onClick="cal.display.value+='+'"style=background-color:#cc5c11;"> </br>
			<input type=button value="3" onClick="cal.display.value+='3'">
			<input type=button value="4" onClick="cal.display.value+='4'">
			<input type=button value="5" onClick="cal.display.value+='5'">
			<input type=button value="-" onClick="cal.display.value+='-'"style=background-color:#ba55d3;"> </br>
			<input type=button value="6" onClick="cal.display.value+='6'">
			<input type=button value="7" onClick="cal.display.value+='7'">
			<input type=button value="8" onClick="cal.display.value+='8'">
			<input type=button value="x" onClick="cal.display.value+='*'"style=background-color:#7db1b2;"> </br>
			<input type=button value="9" onClick="cal.display.value+='9'">
			<input type=button value="C" onClick="cal.display.value=''"style=background-color:#cc0000;">
            <input type=button value="=" onClick="cal.display.value=eval(cal.display.value)"style=background-color:#27ACD9;">
            <input type=button value ="&#247;"   onClick="cal.display.value+='/'"style=background-color:green;">             
                            
        </form>       
    
    </body>

</html>