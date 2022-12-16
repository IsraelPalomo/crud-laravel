<label for="Name">Name</label>
<input type="text" value="{{ $employe->Name }}" name="Name">
<br>
<label for="LastName">LastName</label>
<input type="text" value="{{ $employe->LastName }}" name="LastName">
<br>
<label for="Phone">Phone</label>
<input type="text" value="{{ $employe->Phone }}" name="Phone">
<br>
<label for="Email">Email</label>
<input type="email" value="{{ $employe->Email }}" name="Email">
<br>
<label for="Image">Image</label>
{{ $employe->Image }}
<img width="50rem" height="50rem" src="{{asset('storage').'/'.$employe->Image}}">
<input type="file"  name="Image">
<br>
<input type="submit" value="Enviar">