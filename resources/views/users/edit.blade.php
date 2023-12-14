<!DOCTYPE html>
<head>
    <style>
        body{
            margin-right: 40px;
            margin-left:40px;
        }
        .a{
            border:1px solid grey;
            padding: 10px;
            border-radius:6px;
            font-family: "Italic";
        }
        .b{
            padding: 8px;
            color: black;
        }
        .c{
            color: green;
        }
        .button{
            border: 1 px solid grey;
            border-radius: 6px;
            margin-top:10px;
            margin-left: -580px;
        }
        .btn1{
            padding: 8px 15px;
            margin: 8px;
            background-color: green;
            color: white;
            margin-left: 40%;
        }
        .btn2{
            padding: 8px 15px;
            background-color: red;
            color: white;
        }
        .register{
            border: 1px solid grey;
            padding-left: 200px;
            padding-bottom: 5px;
            padding-top:5px;
            font-family: 'Times New Roman';
        }
        sup{
            color: red;
            padding-left: 7px;
        }
        .name{
            margin:10px;
            margin-left:67px;
        }
        .qua{
            margin:10px;
            margin-left:17px;
        }
        .dob{
            margin: 10px;
            margin-left: 70px;
        }
        .gender{
            margin-left:70px;
        }
        .email{
            margin: 10px;
            margin-left: 0px;
        }
        .password{
            margin-left: 40px;
            margin-bottom:14px;
        }
        .confirm{
            margin-left: -16px;
            margin-bottom: 10px;
        }
        .contact{
            margin: 10px;
            margin-left: 2px;
        }
        .address{
            margin: 10px;
            margin-left: 0px;
        }
        .pincode{
            margin:10px;
            margin-left:0px;
        }
        .image{
            margin:10px;
            margin-left:55px;
        }
        .label{
            color:blue;
            padding-right: 11px;
        }
        input.gen{
            padding-left: -10px;
        }
        #opt{
            padding: 2px;
        }
        .text-danger{
            color:red;
            width: 30%;
            position: relative;
            left: 10px;
        }
        #state{
            margin-left: 5px;
            width: 160px;
        }
        h1{
            color: red;
            border-bottom: 1px solid grey;
        }
        #sign{
            text-decoration: none;
            font-size: 20px;
            float: right;
        }
    </style>
</head>


<body>
    <h1> Management system <a  href="{{ url('/login') }}"    id="sign" > Logout</a> </h1>
    <form action="/list" method="get"  >
  <a href="javascript:history.back()"  style="background-color: red;color:aliceblue;border-radius:5px;">> back  </a>
</form>
       
<h2 class="a">  <img src="/images/edit.png"  width="30px"> Edit </h2>
<div class="register">
    <form method="POST" action="{{ route('users.update',$user->id) }}">
        @csrf
        @method('put')
        <div class="name">
            <h5> User id :{{ $user['reg_id'] }} </h5>
            <input type="hidden" name="id" value="{{ $user['id'] }}">
            <img src="/images/name.png"  width="10px">
            <input type="text" name="name" value="{{ $user['name'] }}">
            @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }} </span>
            @endif
        </div>
        <div class="dob">
            <img src="/images/dob.png"  width="10px">
            <input type="date" name="dob" value="{{ $user['dob'] }}">
            @if($errors->has('dob'))
            <span class="text-danger">{{ $errors->first('dob') }} </span>
            @endif
        </div>
        <div class="gender">
            <img src="/images/gender.jpg"  width="10px">
            <input type="radio" name="gender" value="male" {{ $user->gender == 'male'? 'checked':'' }} class="gen" > Male
            <input type="radio" name="gender" value="female" {{ $user->gender == 'female'?'checked':'' }} > female 
            @if($errors->has('gender'))
              <span class="text-danger"> {{ $errors-> first('gender') }} </span>
            @endif
        <div class="email" >
            <img src="/images/email.png"  width="10px">
        <input type="text" name="email" value="{{ $user['email'] }}" >
        @if($errors->has('email'))
        <span class="text-danger"> {{ $errors-> first('email') }} </span>
        @endif
        </div>

    <div class="contact" >
        <img src="/images/contact.png"  width="10px">
    <input type="text" name="contact" value="{{ $user['contact'] }}" >
    @if($errors->has('email'))
    <span class="text-danger"> {{ $errors-> first('contact') }} </span>
    @endif
    </div>

    <div class="address" >
        <img src="/images/address.png"  width="10px" >
    <textarea name="address" rows="6" cols="30"> {{ $user['address'] }} </textarea>
    @if($errors->has('address'))
    <span class="text-danger"> {{ $errors-> first('address') }} </span>
    @endif
    </div>

    <div class="pincode" >
        <img src="/images/pincode.jpg"  width="10px">
    <input type="text" name="pincode" value="{{ $user['pincode'] }}" >
    @if($errors->has('pincode'))
    <span class="text-danger"> {{ $errors-> first('pincode') }} </span>
    @endif
    </div>
    <img src="/images/state.png"  width="10px">
    
        <input list="browser" name="state"  id="state" class="state" placeholder="State" id="state" value="{{old('state')}}" >                
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
    <div class="button">
        <input type="submit" name="submit" value="+update" class="btn1" >
        <input type="reset" name="btn2" value="x cancel" class="btn2">
        @csrf
    </div>
</body>
</html>
