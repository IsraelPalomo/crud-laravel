<table class="table-employes">
    <thead class="table-head">
        <tr class="table-head--row">
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
            <td>{{$employe->Image}}</td>
            <td>{{$employe->Email}}</td>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>