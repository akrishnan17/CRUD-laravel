<html>
    <head>
        <title> Login Page </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net">
        <style>
            body{
                background-image:url("");
            }
            .login{
                margin:0px ;
                margin-bottom: -20px;
                border-radius:5px;
                margin-left: 690px;
                margin-top: -190px;
               
            }
            .input-text{
                width: 120%;
                height: 50px;
                background-color: #333;
                color: white;
                border-radius:5px;
                border:none;
                text-indent:18px;
            }
            #email{
                margin: 20px;
            }
          
            #sign{
                margin-left: 840px;
                margin-top: -20px;
            }
            #l{
                margin-left: 0px;
                margin-top: 0px;
            }
            .container{
                border: 1px solid black;
                height: 620px;
            }
            #images{
                margin-left: 150px;
                margin-top: -460px;
            }
            .list-group-item{
                margin-left: 700px;
                color:red;
            width: 30%;
            position: relative;
            }
            .row{
                border-left: 3px solid black;
                height: 30%;
                width: 50px;
                margin-left: 490px;
                margin-top: 15%;
               
            }
            #ss{
                margin-left: 330px;
                margin-top: -50px;
                
            }
        
           
        </style>
    </head>
<body>
    <div class="container">
        <div class="row"> </div>
@if($errors->any())
<ul class="alert alert-danger" id="ss">
    {!! implode('',$errors->all('<li class="list-group-item">:message</li>')) !!}
</ul>
@endif

<form method="POST" action="/authenticate" class="login">
    
    <div> </div>
    <h2 id="l">Login</h2>
    <div>
    <label for="" > Email <input type="text" name="email" id="email"> </label>
    </div>
     <div>
    <label for=""> password <input type="password" name="password"> </label>
     </div>
     <br>
    <input type="submit"  value="login" style="width:90px;border-radius:5px;background-color:red;color:white;" >   
    @csrf
</form><br>
<form action="/register" method="get" >
    <div>
        <button a href="{{ url('/register') }}" id="sign" style="width:90px;border-radius:5px;background-color:black;color:white;"> sign up now </button>
    </div>
    @csrf
</form>
</div>
<img src="images/login.png"  width="240px" id="images">
</div>
    </body>
</html>