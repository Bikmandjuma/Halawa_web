@extends('User.Cover')
@section('content')
<div class="container">
  @if(session('WelcomeAuthUser'))
      <script type="text/javascript">toastr.success("Assalam aalaikum ya {{auth()->guard('user')->user()->firstname}} {{auth()->guard('user')->user()->lastname}}");</script>
  @endif
    
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        hey
    <div class="col-md-3"></div>
    </div>

</div>

  @endsection
