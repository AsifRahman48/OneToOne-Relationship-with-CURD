<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tag Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('tag.index') }}">Back</a><br/><br/>

            <h2>User Details</h2>

            <form method="post" action="{{ route('tag.store') }}" enctype="multipart/form-data" >
                @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tag Name</label>
                        <input type="textbox" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name"  required><br/>
                    </div>

                    <div class="form-group">
                        <td></td>
                        <td> <input type="submit" name="submit" class="btn btn-primary"/></td>
                    </div>
            </form>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
