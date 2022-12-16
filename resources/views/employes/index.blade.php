<!doctype html>
 <html>
   <head>
      <meta charset="utf-8"/>
      <meta name="description" content="Resumen del contenido de la página">   
      <title>Título de la página</title>
      <link rel="stylesheet" href="../../sass/app.scss" type="text/scss"/>
     
   </head>
   <body>
   	
<table class="table-employes">
        <thead class="table-head">
            <tr class="table-head--row">
            <th class="table-cell">Id</th>
                <th class="table-cell">Name</th>
                <th class="table-cell">LastName</th>
                <th class="table-cell">Phone</th>
                <th class="table-cell">Email</th>
                <th class="table-cell">Image</th>
                <th class="table-cell">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employes as $employe)
            <tr>
                <td>{{$employe->id}}</td>
                <td>{{$employe->Name}}</td>
                <td>{{$employe->LastName}}</td>
                <td>{{$employe->Phone}}</td>
                <td>{{$employe->Email}}</td>
                <td>
                <img width="50rem" height="50rem" src="{{asset('storage').'/'.$employe->Image}}">
                </td>
                <td>
                <a href="{{url('/employe/'.$employe->id.'/edit')}}">
                    Edit
                </a>
               <form action="{{url('/employe/'.$employe->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar')" value="Delete">
               </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </body>

 </html>