<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https:://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="C:\Users\TOSHIBA\Downloads\larvel\jqueryui1121"></script>
        <script src="C:\Users\TOSHIBA\Downloads\larvel\jqueryui311"></script>
        <script src="C:\Users\TOSHIBA\Downloads\larvel\jquery-ui-1.12.1"></script>
        
        <style>
            body{
                margin-right: 40px;
                margin-left: 40px;
                background-color: white;
                backkground-size:cover;
            }
            .btn1{
                padding:8px 15px;
                margin:8px;
                background-color:red;
                color:white;
                margin-left:22px;
                width:350px;
            }
            .b{
                padding: 8px;
                color:black;
            }
            .c{
                color:black;
            }
            .a{
                padding: 10px;
                border-radius:6px;
                font-family: "Italic";
                border:1px solid grey;
            }
            #m{
                color:black;
            }
            form{
                margin:0 auto;
                width:48%;
                padding-bottom: 5px;
                padding-top:10px;
                margin-top:40px;
                border-radius:5px;
                display:block;
            }
            .input-text input{
                margin-left:180px;
                margin:10px;
                text-align:center;
            }
            #contact1{
                top:20%;
            }
            #name{
                width:335px;
               
            }
            #email{
                margin-left:12px;
                width:335px;
            }
            #pass{
                margin-left:12px;
                width:335px;
               
            }
            #cpass{
                margin-left:12px;
                width:335px;
               
            }
            #address{
                margin-left:12px;
                width:335px;
                
            }
            #dateofbirth{
                margin-left:12px;
                width:335px;
            }
            .gender{
                margin-left:148px;
            }
            #contact{
                margin-left:12px;
                width:335px;
                
            }
            #state{
                margin-left:12px;
                width:345px;
            }
            .form label{
                margin-left:0px;
                color:red;
            }
            .register{
                border:1px solid black;
                padding-left: 200px;
                padding-bottom: 5px;
                padding-bottom: 5px;
                width:1100px;
                padding-top:5px;
            }
            .text-danger{
            color:red;
            width: 30%;
            position: relative;
            left: 10px;
        }
        #date{
            margin-left: 200px;
        }
        </style>
    </head>

<body>
<div class="a">
    <h2 style="margin-left:0px"> <font class="c" > <img src="images/register.png"  width="20px">&nbsp;Register </font></h2></div>


<form method="POST" action="/store" class="register">

    <div class="div">
    <div class="input-text">
        <img src="images/name.png"  width="12px">
    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="name">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }} </span>
    @endif
    </div>
     
    <div class="input-text">
    <img src="images/dob.png"  width="12px">
    <input type="text" name="dob" id="dateofbirth" value="{{ old('dob') }}" >
    @if($errors->has('dob'))
    <span class="text-danger" >{{ $errors->first('dob') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/gender.jpg"  width="12px">
    <input type="radio" name="gender" value="male" {{ old('gender')=='male'?'checked':'' }} > <span id="m"> male </span>
    <input type="radio" name="gender" value="female" {{ old('gender')=='female'?'checked':'' }}> <span id="m"> female </span>
    @if($errors->has('gender'))
    <span class="text-danger" id="date">{{ $errors->first('gender') }} </span>
    @endif
    </div>
     
    <div class="input-text">
        <img src="images/email.png"  width="12px">
    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="email">
    @if($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/password.png"  width="12px">
    <input type="password" id="pass" name="password" value="{{ old('password') }}" placeholder="password">
    @if($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/password.png"  width="12px">
    <input type="password" id="cpass" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="confirm_password">
    @if($errors->has('password_confirmation'))
    <span class="text-danger">{{ $errors->first('password_confirmation') }} </span>
    @endif
    </div>
    
    <div class="input-text">
        <img src="images/contact.png"  width="12px">
     <input type="type" id="contact" name="contact" value="{{ old('contact') }}" placeholder="contact"> 
    @if($errors->has('contact'))
    <span class="text-danger">{{ $errors->first('contact') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/address.png"  width="12px">
    <input type="type" id="address" name="address" value="{{ old('address') }}" placeholder="address"> 
    @if($errors->has('address'))
    <span class="text-danger">{{ $errors->first('address') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/pincode.jpg"  width="12px">
   <input type="type" id="contact" name="pincode" value="{{ old('pincode') }}" placeholder="pincode">
    @if($errors->has('pincode'))
    <span class="text-danger">{{ $errors->first('pincode') }} </span>
    @endif
    </div>

    <div class="input-text">
        <img src="images/state.png"  width="12px">
<input list="browser" name="state" class="state" placeholder="State" id="state" value="{{old('state')}}" >                
<datalist id="browser" style="margin: left 95px;">
      <option value="Andhra Pradesh">
      <option value="Arunachal Pradesh">
      <option value="Assam">
      <option value="Bihar">
      <option value="Chhattisgarh">
      <option value="Goa">
      <option value="Gujarat">
      <option value="Haryana">
      <option value="Himachal Pradesh">
      <option value="Jharkhand">
      <option value="Karnataka">
      <option value="Kerala">
      <option value="Madhya Pradesh">
      <option value="Maharashtra">
      <option value="Manipur">
      <option value="Meghalaya">
      <option value="Mizoram">
      <option value="Nagaland">
      <option value="Odisha">
      <option value="Punjab">
      <option value="Rajasthan">
      <option value="Sikkim">
      <option value="Tamil Nadu">
      <option value="Telangana">
      <option value="Tripura">
      <option value="Uttar Pradesh">
      <option value="Uttarakhand">
      <option value="West Bengal">
      <option value="Andaman and Nicobar Islands">
      <option value="Chandigarh">
      <option value="Dadra and Nagar Haveli and Daman and Diu">
      <option value="Delhi">
      <option value="Jammu and Kashmir">
      <option value="Ladakh">
      <option value="Lakshadweep">
      <option value="Puducherry">
</datalist>
    @if($errors->has('state'))
    <span class="text-danger">{{ $errors->first('state') }} </span>
    @endif
    <br></div>
    <input type="submit" value="Register" class="btn1">
    @csrf
</form>
<script>
    $(function(){
        $("#dateofbirth").datepicker({
            dateFormat:'yy-mm-dd',
            minDate:0,
            showotherMonths:true,
            selectotherMonths:true
        });
    });
</script>
<script>
    function checkdob(){
        const dobInput = document.getElementById("#dateofbirth").value;
        const dob = new Date(dobInput);
        const today = new Date();
        if (today.getFullYear()-dob.getFullYear()<18){
            alert("not aligible");
        }
    }
</script>
</body>
</html>