<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afiza</title>
</head>
<body>
<div class="col-md-6">
        
        </div>
        <div class="row">
        <div class="col-md-6">
            <center><h3><a href="{{ url('/kalkulator2') }}">kalkulator2</a></h3></center>
        </div>
    </div>
    <style>
        .frame-kalks  #neelam{  
   width:390px;  
   border-bottom: 6px solid ;  
   border-bottom-color:#87CEFA;  
   background-color:#808080;  
 }  
.frame-kalks table {  
  margin: auto;  
  width: 425px;  
  max-width: 400px;  
  height: 500px;  
  text-align: center;  
  border-radius: 3px;  
  padding-right: 10px;  
 }  
.frame-kalks input {  
  outline: 0;  
  position: relative;  
  left: 8px;  
  top: 6px;  
  border: 0;  
  color: #3C565B;  
  background-color: #bbb;  
  border-radius: 4px;  
  width: 60px;  
  height: 50px;  
  float:left;  
  margin:5px;  

  font-size:35px;  
  box-shadow:0 4px rgb (40, 178, 170);  
  margin-bottom:15px;   
  }  


 .frame-kalks #clear{  
    float: left;  
    position: relative ;  
    display: block ;  
    background-color: #00FFFF;  
  }  
 
 
    </style>
<center>
  <h2>KALKULATOR SEDERHANA</h2>
 

<div class="frame-kalks alert-info p-10 rounded">
    <form name="calc">  
        <table class="red-gradient" border=8>  
            <tr>  
                <td colspan="4">   <input type="text" name="display" id="neelam" value="" readonly>  </td>  
            </tr>  
                 <td><input type="button" value="1" onClick="calc.display.value+='1'"> </td>   
                 <td><input type="button" value="2" onClick="calc.display.value+='2'"></td> 
                <td> <input type="button" value="3" onClick="calc.display.value+='3'"> </td>   
                <td><input type="button" class="operator" name = "plus"value="+"  onClick="calc.display.value+='+'"></td>  
            <tr>   
                <td> <input type="button" value="4" onClick="calc.display.value+='4'"> </td>  
                <td> <input type="button" value="5" onClick="calc.display.value+='5'"> </td>  
                <td> <input type="button" value="6" onClick="calc.display.value+='6'"> </td> 
                <td> <input type="button" class="operator" name="minus"value="-" onClick="calc.display.value+='-'">  </td>  
            </tr>  
            <tr>  
                <td> <input type="button" value="7"  onClick="calc.display.value+='7'"></td>  
                <td> <input type="button" value="8"  onClick="calc.display.value+='8'"> </td>
                <td> <input type="button" value="9" onClick="calc.display.value+='9'"></td>   
                <td> <input type="button" class="operator" name="times"value="*" onClick="calc.display.value+='*'"></td>  
            </tr>  
            <tr>  
                <td><input type="button" value="0" onClick="calc.display.value+='0'"></td> 
                <td><input type="button" value="00" onClick="calc.display.value+='00'"></td> 
                <td> <input type="button" class="operator" name="equal"value="=" onClick="calc.display.value =eval(calc.display.value)"></td>
                <td> <input type="button" class="operator" name = "div"value="/" onClick="calc.display.value+='/'"> </td>
                   
            </tr>
            <tr>
            <td> <input type="button" id="clear" name="clear" value="c" onClick="calc.display.value=''"></td> 
           
                          
                            <td colspan=4>
                            Nama: Afiza Ananta <br>
                                Kelas :XII RPL

            
            </tr>
        </table>  
    </form>  
</div>
</center>
</body>
</html>