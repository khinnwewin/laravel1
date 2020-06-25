<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<form method="post" action="{{ url('dress') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" required="" name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" required="">
  </div>
  <div class="input-group">
    <div class="custom-file photo">
       <label class="custom-file-label">Image</label>
      <input type="file" name="image" class ="custom-file-input">
     
    </div>
  </div>
   <!--  <div class="form-group row">
    <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
    <div class="col-md-6">
    <input id="profile_image" type="file" class="form-control" name="profile_image">
     @if (auth()->user()->photo)
      <code>{{ auth()->user()->photo }}</code>
      @endif
       </div> -->
 
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
