<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Show</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <a href="{{ route('user.create') }}">Add Record</a><br/><br/>
            {{session('msg')}}

            <h2 class="text-center my-3">User Data</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->email }}</td>
                        <td>{{ $list->profile->address }}</td>
                        <td>{{ $list->profile->age }}</td>
                        <td>
                            <a href="{{ route('user.delete',$list->id) }}" class="delete">Delete</a>
                            <a href="{{ route('user.edit',$list->id) }}" class="edit">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
