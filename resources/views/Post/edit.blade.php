<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Post Edit</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('post.index') }}">Back</a><br/><br/>
            <h5>Post Edit Page</h5>

            <h2>Post Details</h2>
            <form method="post" action="{{ route('post.update',$post->id) }}" enctype="multipart/form-data" >
                @csrf

{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Select Post</label>--}}
{{--                    <select name="post_id" class="form-control">--}}
{{--                        @foreach($posts as $list)--}}
{{--                            <option value="{{ $list->id }}" {{ $comment->post_id==$list->id ? 'selected':'' }}>--}}
{{--                                {{ $list->title }}--}}
{{--                            </option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="textbox" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title" value="{{ $post->title }}" required><br/>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="image" aria-describedby="imageHelp" placeholder="Image" value="" ><br/>
                    <img src="{{ asset("storage/".$post->image) }}" width="70px"  height="70px" alt="Image">
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Comment</label>--}}
{{--                    <input type="textbox" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name" value=" @foreach($post->comments as $com)--}}
{{--                                {{ $com->name }}--}}
{{--                            @endforeach" required><br/>--}}
{{--                </div>--}}

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
