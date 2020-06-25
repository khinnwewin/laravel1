<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<a href="{{ url('post/create') }}" class="btn btn-primary pull-right">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Module-id</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
   
        <tr>
          <th scope="row">#</th>
          <td>{{$post->name}}</td>
           <td>{{$post->description}}</td>
           <td>{{$post->module->name}}</td>
        
         <td>
            <a href="{{ url('post/'.$post->id.'/p_edit') }}" class="btn btn-primary">Edit</a></td>
          <td>
                <a href="{{ url('post/'.$post->id.'/destory') }}" class="btn btn-danger">Delete</a>
                {{-- <form action="{{ url('post/'.$post->id.'/destory') }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form> --}}
            </td>
          </tr> 
    @endforeach
  </tbody>
</table>