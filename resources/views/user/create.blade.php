<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('user.index') }}">Back</a><br/><br/>

            <h2>User Details</h2>

            <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data" >
                @csrf
                <table>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="textbox" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name"  required><br/>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email"  required><br/>
                    </div>
                    <h2>Profile Details</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="textbox" name="address" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter Address"  required><br/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="textbox" name="age" class="form-control" id="age" aria-describedby="ageHelp" placeholder="Enter Age"  required><br/>
                    </div>

                    <div class="form-group">
                        <td></td>
                        <td> <input type="submit" name="submit" class="btn btn-primary"/></td>
                    </div>
                </table>
            </form>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
