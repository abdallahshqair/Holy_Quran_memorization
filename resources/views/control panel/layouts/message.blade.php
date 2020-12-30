@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" style="align-content:center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> نجح </h5>
        {{Session::get('success')}}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> خطأ!</h5>
        {{Session::get('error')}}
    </div>
@endif

@if($errors->any() )
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> خطأ!</h5>

    @foreach($errors->all() as  $error)
        {{$error}}<br>
    @endforeach
    </div>
    @endif
