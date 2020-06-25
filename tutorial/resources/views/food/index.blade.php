<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<a href="{{ url('food/create') }}" class="btn btn-primary pull-right">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Pdf</th>
    </tr>
  </thead>
  <tbody>
    @foreach($foods as $food)
        <tr>
          <th scope="row">#</th>
          <td>{{$food->name}}</td>
          <td>{{$food->email}}</td>
          <td> 
            @if ($food->image)
            <img src="{{ asset('storage/images/' . $food->image) }}" alt="{{ $food->title }} photo" class="img-fluid" width="100px" height="100px">
            @endif
           </td>
           <td>
              <a href="{{ url('food/'.$food->id.'/download') }}" class="btn btn-primary">Download</a></td>
           </td>
          <td>
            <a href="{{ url('food/'.$category->id.'/edit') }}" class="btn btn-primary">Edit</a></td>
          <td>
                <a href="{{ url('food/'.$food->id.'/destory') }}" class="btn btn-danger">Delete</a>
                {{-- <form action="{{ url('food/'.$food->id.'/destory') }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form> --}}
            </td>
           


        </tr>
    @endforeach
  </tbody>
</table>