<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="C:\Users\TOSHIBA\Downloads\larvel\jqueryui1121"></script>
    <script src="C:\Users\TOSHIBA\Downloads\larvel\jqueryui311"></script>
    <script src="C:\Users\TOSHIBA\Downloads\larvel\jquery-ui-1.12.1"></script>
    <title>Student List</title>
    <style>
      ul{
		list-style-type: none;
		margin-right:0;
		padding: 0;
		overflow: hidden;
		border-top-left-radius: 10px;
        margin-left: 10px;
		}
		li{
		float: left;
		border-right: 3px solid white;
		}
		li:last-child{
		border-right: none;

		}
		li a{
            display: block;
            color: black;
            text-align:center;
            padding: 10px 15px;
            text-decoration:none;
            background-color: lightblue;
		}
		li a:hover{
			background-color: grey;
		}
		
        h1{
            color:red;
            border-bottom:1px solid lightgray;
            font-size: 30px;
            margin-left:10px ;
        }
        h3 {
            border:1px solid #ddd;
            width:100%;
            height:40px;
            border-radius:0.3em;
            padding-bottom:10px;
            padding-left: 10px;
        }
        table {
            width: 98%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-left: 10px;
            
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightblue;
            color: black;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        body {
            background-image: url(''); 
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .table-container {
            max-height: 220px; 
            overflow: auto;
            margin-top: 50px;
        }   
        #searchInput {
            margin-right: 10px; 
            float: right; 
            margin-top: 10px;
        }
        #sign{
            float: right;
            font-size: 25px;
            text-decoration: none;
        }
        #ss{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1> Management System <a href="{{ url('/login') }}" id="sign" > Logout </a></h1>
    <form action="/login" method="get" >
        
    <h3><img src="images/address.png"  width="30px"> List</h3>
    <form action="/register" method="get" >
        <div>
            <button a href="{{ url('/') }}"  style="width:90px;border-radius:5px;background-color:red;color:white;"> + Register </button>
        </div>
        @csrf
    </form>
    <h4> select the field to sort </h4>
    <form action="{{ route('user.index') }}" method="GET" name="sortForm">
        <select name="sort_by">
            <option value=" id">User Id</option>
            <option value="name">Name</option>
            <option value="gender">Gender</option>
            <option value="email">Email Id</option>
            <option value="contact">contact</option>
            <option value="datepicker">DOB</option>
            <option value="address">Address</option>
            <option value="pincode">Pincode</option>
            <option value="state">State</option>
        </select>
    </form>
    <img src="images/search.png"  width="30px" style="margin-left:1120px;margin-top:12px;" ><input type="text" id="searchInput" placeholder="Search by Student Name" >
    <div class="table-container">
            <script>
            $(document).ready(function () {
                $("#searchInput").on("input", function () {              
                var searchText = $(this).val().toLowerCase();
                $("table tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
                });
                });
            });
            </script>
    <table>
        <tr style="background-color: lightblue; font-weight: bold;">
            <td>Student ID</td>
            <td>REG ID</td>
            <td>Student Name</td>
            <td>Gender </td>
            <td>Email </td>
            <td>Contact</td>
            <td>DOB</td>
            <td>Address</td>
            <td>Pincode</td>
            <td>State</td>
            <td>Status</td>
            <td>Delete</td>
        </tr>
        @foreach ($students as $users)
        <tr>
            <td>{{ $users -> id }}</td>
            <td ><a href="{{ url('student/view',$users->id) }}" id="ss">{{ $users -> reg_id }}</a></td>
            <td>{{ $users -> name }}</td>
            <td>{{ $users -> gender }}</td>
            <td>{{ $users -> email }}</td>
            <td>{{ $users -> contact }}</td>
            <td>{{ $users -> dob }}</td>
            <td>{{ $users -> address }}</td>
            <td>{{ $users -> pincode }}</td>
            <td>{{ $users -> state }}</td>
            <td>
               <a href= "user/{{ $users->id }}" class="btn-{{ $users->status?'success':'danger' }}" id="ss">
                {{ $users->status? 'use' : 'not use' }}
               </a>
            </td>
            <td><a href="delete/{{$users->id}}" id="ss">Delete</a></td>
        </tr>
        @endforeach
</table>
</div>
    <script>
    $(document).ready(function () {
        // Add an event listener to the sort form
        $("form[name='sortForm']").change(function () {
            // Submit the form when sorting options change
            $(this).submit();
        });
    });
    </script>
</body>
</html>