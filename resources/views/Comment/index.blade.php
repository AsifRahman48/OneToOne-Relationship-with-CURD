<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Comment Show</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <a href="{{ route('comment.create') }}">Add Record</a><br/><br/>
            <a href="{{ route('post.index') }}">Post Page</a><br/>
            {{session('msg')}}
            <h2 class="text-center my-3">Comment Data</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Comment Id</th>
                    <th>Post Title</th>
                    <th>Image</th>
                    <th>Comment </th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($comments as $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->post->title }}</td>
                        <td>
                            <img src="{{ asset("storage/".$list->post->image) }}" width="70px"  height="70px" alt="Image">
                        </td>
                        <td>{{ $list->name }}</td>
                        <td>
                            <a href="{{ route('comment.edit',$list->id) }}" class="btn btn-edit">Edit</a>
                            <a href="{{ route('comment.delete',$list->id) }}" class="btn btn-danger">Delete</a>
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
