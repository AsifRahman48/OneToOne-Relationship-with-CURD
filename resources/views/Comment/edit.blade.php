<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Comment Edit</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('comment.index') }}">Back</a><br/><br/>
            <h5>Comment Edit Page</h5>

            <h2>Comment Details</h2>
            <form method="post" action="{{ route('comment.update',$comment->id) }}" enctype="multipart/form-data" >
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Select Post</label>
                    <select name="post_id" class="form-control">
                        @foreach($posts as $list)
                            <option value="{{ $list->id }}" {{ $comment->post_id==$list->id ? 'selected':'' }}>
                                {{ $list->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Comment Name</label>
                    <input type="textbox" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" value="{{ $comment->name }}" required><br/>
                </div>

                    <div class="form-group">
                        <td> <input type="submit" name="update"  class="btn btn-primary" value="Update" /></td>
                    </div>

            </form>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
