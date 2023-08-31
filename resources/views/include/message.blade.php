@if (session()->get('error'))
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> {{session()->get('error')}}.
</div>
@endif

@if (session()->get('success'))
<div class="alert alert-success alert-dismissible">
    <strong>Sucess!</strong> {{session()->get('success')}}.
</div>
@endif