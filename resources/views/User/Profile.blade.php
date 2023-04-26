@extends('User.Cover')
@section('content')
<style>
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
               
                <button style="margin-bottom:5px;" class="btn btn-info" data-toggle="modal" data-target="#profile"><i class="fa fa-edit"></i>&nbsp;Edit</button>
              </div>
          </div>
      </div>
      
  </div>
  <div class="col-md-4"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify your profile picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <form action="{{route('changeprofile')}}" method="POST" enctype="multipart/form-data">
            @csrf            
            <img src="{{asset('images/admin/'.auth()->guard('user')->user()->image)}}" id="blah" style="width:120px;height:120px;"/><br>
            <input name="profile_picture" type="file" accept="image/*" id="imgInp" class="form-control" required><br>
            <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-save"></i>&nbsp; Save changes</button>
        </form> -->

            
            <div id="upload-demo"></div>
            <form action="{{route('changeprofile')}}" method="POST">
              @csrf
                <div id="preview-crop-image">
                  <input type="file" id="image">
                </div>
                <button class="btn btn-success btn-block btn-upload-image" type="submit" style="margin-top:2%">Save image</button>
            </form>

             <!--  <form method="POST">
                <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
// imgInp.onchange = evt => {
//   const [file] = imgInp.files
//   if (file) {
//     blah.src = URL.createObjectURL(file)
//   }
// }


var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 200,
        height: 200,
        type: 'circle' //square
    },
    boundary: {
        width: 250,
        height: 250
    }
});


$('#image').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.btn-upload-image').on('click', function (ev) {
  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    $.ajax({
      url: "user/Submitprofilform",
      type: "POST",
      data: {"image":img},
      success: function (data) {
        html = '<img src="' + img + '" />';
        $("#preview-crop-image").html(html);
      }
    });
  });
});
</script>

@endsection

