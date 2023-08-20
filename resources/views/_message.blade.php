<div class="clear-both"></div>

@if (!@empty(session('success')))
<div class="alert alert-success alert-dismissible" role="alert">
    {{session('success')}}
</div>
@endif

@if (!@empty(session('error')))
<div class="alert alert-danger alert-dismissible" role="alert">
    {{session('error')}}
</div>
    

    
@endif