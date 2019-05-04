<html>

<head>
    <title>note</title>
</head>
<bod>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@if(session('error'))
        <div class="alert alert-danger" style="margin: 50px; background-color: red;">
            {{session('error')}}
        </div>
    @elseif(session('success'))
        <div class="alert alert-success" style="background-color: darkseagreen; margin: 50px">
            {{session('success')}}
        </div>
    @endif
    <form action="{{route('store')}}" method="post" style="margin: 100px">
        @csrf
        <div style="text-align: center; margin: 10px" class="form-group">
            <H5>Note title</H5>
            <input type="text" name="n_title" class="form-control"  required>

        </div>
        <div  class="form-group" style="text-align: center;">
            <H5>Note content</H5>
            <textarea rows="4" cols="50" class="form-control"  name="n_content"required>
</textarea>

        </div>
        <div style="text-align: center; margin: 20px">
        <button type="submit"  class="btn btn-primary"> Enter</button>
        </div>
    </form>

        <table class="table table-bordered" border="1px" style="text-align: center;width: 50% ; margin-left: 300px;">
            <thead>
            <tr >
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    Note Title
                </th>
                <th scope="col">
                    Note content
                </th>
                <th scope="col">

                   Add Date                              </th>

            </tr>
            </thead>
            <tbody>
            @foreach($note as $note)

                <tr>
                    <td class="font-weight-medium">
                        {{$note->id}}
                    </td>
                    <td>
                        {{$note->n_title}}

                    </td>
                    <td>
                        {{$note->n_content}}
                    </td>
                    <td>
                        {{$note->created_at}}
                    </td>

                </tr>
            @endforeach
            </tbody>

        </table>

</bod>
</html>