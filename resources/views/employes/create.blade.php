<form action="{{url('/employe')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <label for="Name">Name</label>
<input type="text"  name="Name">
<br>
<label for="LastName">LastName</label>
<input type="text"  name="LastName">
<br>
<label for="Phone">Phone</label>
<input type="text"  name="Phone">
<br>
<label for="Email">Email</label>
<input type="email"  name="Email">
<br>
<label for="Image">Image</label>
<input type="file"  name="Image">
<br>
<input type="submit" value="Enviar">
</form>