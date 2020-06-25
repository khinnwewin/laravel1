<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<a href="{{ url('teacher/create') }}" class="btn btn-primary pull-right">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Desctiption</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teachers as $teacher)
        <tr>
          <th scope="row">#</th>
          <td>{{$teacher->name}}</td>
          <td>{{$teacher->description}}</td>
          <td><a href="{{ url('teacher/'.$teacher->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
            <td>
                <a href="{{ url('teacher/'.$teacher->id.'/destory') }}" class="btn btn-danger">Delete</a>
                {{-- <form action="{{ url('teacher/'.$teacher->id.'/destory') }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form> --}}
            </td>
        </tr>
    @endforeach
  </tbody>
</table>