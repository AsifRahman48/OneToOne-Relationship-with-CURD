<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Post Create</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('post.index') }}">Back</a><br/><br/>

            <h2>Post Details</h2>

            <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data" >
                @csrf
                <table>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Post Title</label>
                        <input type="textbox" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title"  required><br/>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp" placeholder="Image"  ><br/>
                    </div>
{{--                    <h2>Profile Details</h2>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Address</label>--}}
{{--                        <input type="textbox" name="address" class="form-control" id="address" aria-describedby="addressHelp" placeholder="Enter Address"  required><br/>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputEmail1">Age</label>--}}
{{--                        <input type="textbox" name="age" class="form-control" id="age" aria-describedby="ageHelp" placeholder="Enter Age"  required><br/>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <td></td>
                        <td> <input type="submit" name="submit" class="btn btn-primary" value="Save"/></td>
                    </div>
                </table>
            </form>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
