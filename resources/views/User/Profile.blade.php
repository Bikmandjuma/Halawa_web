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
               
                <!-- <button style="margin-bottom:5px;" class="btn btn-info image" type="file" name="image"><i class="fa fa-edit"></i>&nbsp;Edit</button> -->
                <input type="file" name="image" class="image">
              </div>
          </div>
      </div>
      
  </div>
  <div class="col-md-4"></div>
</div>

<!-- Modal -->
<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 section text-center">
                <h1>Laravel 9 Cropper Js - Crop Image Before Upload - Nicesnippets.com</h1>
                <input type="file" name="image" class="image">
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Laravel 9 Cropper Js - Crop Image Before Upload - Nicesnippets.com</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;

        $("body").on("change", ".image", function(e){
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };

            var reader;
            var file;
            var url;

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                reader.readAsDataURL(file);
                }
            }
        });

        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function(){
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result; 
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "crop-image-upload",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function(data){
                            console.log(data);
                            $modal.modal('hide');
                            alert("Crop image successfully uploaded");
                        }
                    });
                }
            });
        });
    </script>

@endsection

