<!DOCTYPE html>
<head>
    <title>Management System </title>
    <style>
        .view{
            border: 1px solid rgba(0,0,0,0.5);
            border-radius: 10px;
            color: rgb(167,0,246);
        }
        #list{
            border: 1px solid black;
            border-radius:10px;
            text-decoration: none;
        }
        .red{
            background-color:rgb(122,210,110);
            color: white;
            padding: 8px;
            margin-left: 10px;
            width: 30px;
            border-radius:10px;
            margin-top: -10px;
            text-decoration: none;
        }
        .aaa{
            margin-left: 1240px; 
            width: 70px;
            background-color:red;
            padding: 8px;
            color: white;
            border-radius:10px;
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
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>  
    <h1> Management system <a  href="{{ url('/login') }}"    id="sign" > Logout</a> </h1>         
    <div class="view">
        <h2>  <img src="/images/name.png"  width="30px"> View </h2>
    </div> <br>
   <a href="{{ route('users.edit',$student->id) }}"  class="aaa"  style="text-decoration: none;">Edit </a>
      <a href="{{ url('/list') }}" class="red" style="float: left;"> back </a> 
        <br><br>
        <div id="list">         
            <center>
                <table style="line-height: 35px;border-color:none;width:40%;height:80%">
                <tr>
                    <td  style="color: blue"> User id </td>
                    <td style="color: green"> {{ $student->reg_id }} </td>
                </tr>
                <tr>
                    <td style="color: blue"> user Name </td>
                    <td style="color: green"> {{ $student->name }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > Dob </td>
                    <td style="color: green">{{ $student->dob }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > Gender </td>
                    <td style="color: green">{{ $student->gender }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > email </td>
                    <td style="color: green">{{ $student->email }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > contact </td>
                    <td style="color: green">{{ $student->contact }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > address </td>
                    <td style="color: green">{{ $student->address }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > state </td>
                    <td style="color: green">{{ $student->state }} </td>
                </tr>
                <tr>
                    <td style="color:blue" > pincode </td>
                    <td style="color: green">{{ $student->pincode }} </td>
                </tr>
                </table>
            </center>
        </div>
</body>
</html>


        