@extends('User.Cover')
@section('content')

<style type="text/css">
   
    h1{
        font-weight: bold;
        font-size:23px;
    }

    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        text-align: center;
        overflow: hidden;
        width: 160px; 
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }
    input{
        margin-top:40px;
    }
    .section{
        margin-top:150px;
        background:#fff;
        padding:50px 30px;
    }
    .modal-lg{
        max-width: 1000px !important;
    }

  .card_profile{
      justify-content: center;
      display: flex;
      align-items: center;
    }

    .card_title{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
/*        width: 70%; */
        text-align: center;
        background-color: white;
        border-radius:10px;
        font-family: sans-serif;
        font-weight: bold;
    }

    .card_title h3{
        font-family: serif;
    }
    
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 70%;
        border-radius:5px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
        text-align: center;
        font-family: serif;
    }
</style>
<br>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4 text-center" style="overflow:auto;">

      @if(session('profile_changed'))
            <script type="text/javascript">toastr.success("Image added well !")</script>
      @endif

      @if(session('profile_error'))
            <script type="text/javascript">toastr.error("Error to upload image !")</script>
      @endif
    
      <div class="card_profile">  
          <div class="card">              
              <div class="card_title">
                <h3><i class="fas fa-user"></i> Profile picture</h3>
              </div>

              <img src="{{asset('images/admin/'.auth()->guard('user')->user()->image)}}">
              <div class="container">
                <h4><b>{{auth()->guard('user')->user()->firstname}}&nbsp;{{auth()->guard('user')->user()->lastname}}</b></h4> 
               
                <button data-toggle="modal" data-target="#ProfileModals" style="margin-bottom:5px;" class="btn btn-info image" type="file" name="image"><i class="fa fa-edit" ></i>&nbsp;Edit</button>
              </div>
          </div>
      </div>

       <!--start of Profile modal -->
          <div class="modal" id="ProfileModals" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm text-center">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4><i class="fa fa-image"></i>&nbsp;Profile picture</h4>
                </div>
                <div class="modal-body">
                  <div class="actionsBtns">
                    <form enctype="multipart/form-data" method="POST" action="{{route('changeprofile')}}">
                        @csrf
                        <img id="blah" style="width:130px;height:150px;" src="{{asset('images/admin/'.auth()->guard('user')->user()->image)}}" /><br>
                        <br>
                        <input name="profile_picture" type="file" accept="image/*" id="imgInp" class="form-control" required><br>
                        <button class="btn btn-primary" type="submit" name="SubmitProfilePicture"><i class="fa fa-save"></i> Save change</button>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--end of profile modal-->
      
  </div>
  <div class="col-md-4"></div>
</div>

 <script type="text/javascript">
    imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
        blah.src = URL.createObjectURL(file)
      }
    }
</script>

@endsection

