
<form action="{{url('/employe/'.$employe->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('employes/form')
</form>