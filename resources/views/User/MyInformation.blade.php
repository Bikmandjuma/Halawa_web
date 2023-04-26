@extends('User.Cover')
@section('content')
<?php
$id=auth()->guard('user')->user()->id;
?>
<br>
<style type="text/css">
  #my_data p{
    float: left;
  }
  #eye_shows_info:hover ,#view_more_infos:hover{
    cursor: pointer;
    color:skyblue;
  }
</style>

@if(session('status'))
    <script type="text/javascript">toastr.success("Info updated successfully !")</script>
@endif

<div class="container">
    <div class="row">
          <div class="col-sm-2 col-2"></div>
          <div class="col-sm-8 col-12">
            
            <?php
              $count=1;
              if ($errors->any()) {
                ?>
                  <div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close text-default" type="button">&times;</button>
                      <ul style="list-style-type:none;">
                      <?php
                      foreach ($errors->all() as $errors) {
                        echo "<li>".$count++.")&nbsp;".$errors."</li>";
                      }
                  ?>
                      </ul>
                  </div>
                  <?php
              }
            ?>

            @if(session('role'))
            <div class="alert alert_error"> <button aria-hidden="true" data-dismiss="alert" class="close text-default" type="button">&times;</button>
                <ul style="list-style-type:none;">
                  <li>{{session('role')}}</li>     
                </ul>
            </div>
            @endif

            <div class="card">
            @foreach($info as $data)
              <div class="card-header text-center bg-info"><i class="fa fa-user f-w"></i>&nbsp;&nbsp;<b>{{auth()->guard('user')->user()->role}}</b>&nbsp; informations <a href="#" data-toggle="modal" data-target="#EditInfoModal" data-backdrop="static" data-keyboard="false"><button class="btn btn-light float-right"><i class="fa fa-edit"></i> Edit</button></a></div>
              <div class="card-body" style="overflow: auto;">
                      <div class="row">
                        <div class="col-sm-6 text-center">
                            <img src="{{asset('images/admin/'.auth()->guard('user')->user()->image)}}" class="img-circle elevation-2" alt="User Image" style="width:80px;height:80px;border:2px solid skyblue;">
                        </div>

                        <div class="col-sm-6">
                          <hr>
                          <div class="row">
                            <div class="col-md-12">
                              <span id="my_data"><p><b>Firstname :&nbsp;</b></p><p class="text-info"><b> {{$data->firstname}}</b></p></span>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <span id="my_data"><p><b>Lastname :&nbsp;</b></p><p class="text-info"><b> {{$data->lastname}}</b></p></span>
                            </div>
                          </div>

                        </div>

                      </div>
                      

                      <hr>

                      <div class="row">
                        <div class="col-md-6">
                          <span id="my_data"><p><b>Gender :&nbsp;</b></p><p class="text-info"><b> {{$data->gender}}</b></p></span>
                        </div>

                        <div class="col-md-6">
                          <span id="my_data"><p><b>Phone :&nbsp;</b></p><p class="text-info"><b> {{$data->phone}}</b></p></span>
                        </div>
                      </div>

                      <hr>

                      <div class="row">
                        <div class="col-md-6">
                          <span id="my_data"><p><b>Email :&nbsp;</b></p><p class="text-info"><b> {{$data->email}}</b></p></span>
                        </div>

                        <div class="col-md-6">
                          <span id="my_data"><p><b>Study decision :&nbsp;</b></p><p class="text-info"><b> {{$data->study_status}}</b></p></span>
                        </div>
                      </div>

                      <div class="dropdown-divider" id="moreInfoLine"></div>

                      <div class="row">
                        <div class="col-md-12 text-center text-primary">
                          <p id="eye_shows_info" onclick="ViewMoreInfoFN()">More infos <i class="fa fa-eye" title="View all your information"></i></p>
                        </div>
                      </div>

                    <span id="less_infos" style="display: none;">

                      <div class="dropdown-divider"></div>

                      <div class="row">
                        <div class="col-md-6">
                          <span id="my_data"><p><b>Status :&nbsp;</b></p><p class="text-info"><b> {{$data->role}}</b></p></span>
                        </div>

                        <div class="col-md-6">
                          <span id="my_data"><p><b>Residence :&nbsp;</b></p><p class="text-info"><b> {{$data->residence}}</b></p></span>
                        </div>
                      </div>

                      <div class="dropdown-divider"></div>

                      <div class="row">
                        <div class="col-md-6">
                          <span id="my_data"><p><b>Birth date :&nbsp;</b></p><p class="text-info"><b> {{$data->birth_date}}</b></p></span>
                        </div>

                        <div class="col-md-6">
                          <span id="my_data"><p><b>Study period :&nbsp;</b></p><p class="text-info"><b> {{$data->start_year}}-{{$data->end_year}}</b></p></span>
                        </div>
                      </div>

                      <div class="dropdown-divider"></div>

                      <div class="row">
                        <div class="col-md-6">
                          <span id="my_data"><p><b>Department :&nbsp;</b></p><p class="text-info"><b> {{$data->department}}</b></p></span>
                        </div>

                        <div class="col-md-6">
                          <span id="my_data"><p><b>Joined system :&nbsp;</b></p><p class="text-info"><b> {{$data->created_at}}</b></p></span>
                        </div>
                      </div>
                      
                      <div class="dropdown-divider"></div>

                      <div class="row">
                        <div class="col-md-12 text-center text-primary">
                          <p id="view_more_infos" onclick="ViewLessInfoFN()">Less infos <i class="fa fa-eye" title="View less info"></i></p>
                        </div>
                      </div>

                    </span>

                    <!--start of edit modal -->
                      <div class="modal" id="EditInfoModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                          <div class="modal-content">
                            <div class="modal-body text-center">
                              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                              <h4><u>Edit information&nbsp;<i class="fa fa-edit"></i></u></h4>
                            </div>
                            <div class="modal-body">
                              <div class="actionsBtns">
                                 <form method="POST" action="{{route('editinfo',$id)}}">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-4">

                                        <label>Firstname</label>
                                        <input type="text" name="fname" value="{{auth()->guard('user')->user()->firstname}}" class="form-control" required>

                                        <label>Lastname</label>
                                        <input type="text" name="lname" value="{{auth()->guard('user')->user()->lastname}}" class="form-control" required>

                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                          <?php
                                            if (auth()->guard('user')->user()->gender == "male") {
                                              echo "
                                                    <option value='male' selected>Male</option>
                                                    <option value='female'>Female</option>
                                                  ";
                                            }else{
                                              echo "
                                                    <option value='female' selected>Female</option>
                                                    <option value='male'>Male</option>
                                                  ";
                                            }
                                          ?>
                                        </select>

                                        <label>Phone</label>
                                        <input type="number" name="phone" value="{{auth()->guard('user')->user()->phone}}" class="form-control" required>

                                      </div>
                                      <div class="col-md-4">

                                        <label>Email</label>
                                        <input type="email" name="email" value="{{auth()->guard('user')->user()->email}}" class="form-control" required>

                                        <label>Birth_date</label>
                                        <input type="date" name="dob" value="{{auth()->guard('user')->user()->birth_date}}" class="form-control" required>

                                        <label>Study decision</label>
                                        <select name="study_status" class="form-control">
                                          <?php
                                            if (auth()->guard('user')->user()->study_status == "graduated") {
                                              echo "
                                                    <option value='graduated' selected>Graduated</option>
                                                    <option value='still_studying'>Still studying</option>
                                                  ";
                                            }else{
                                              echo "
                                                    <option value='still_studying' selected>Still studying</option>
                                                    <option value='graduated'>Graduated</option>
                                                  ";
                                            }
                                          ?>
                                        </select>

                                        <label>Role</label>
                                        <input type="text" name="role" value="{{auth()->guard('user')->user()->role}}" class="form-control" required>

                                      </div>
                                      <div class="col-md-4">

                                        <label>Department</label>
                                        <input type="text" name="dept" value="{{auth()->guard('user')->user()->department}}" class="form-control" required>

                                        <label>Residence</label>
                                        <input type="text" name="residence" value="{{auth()->guard('user')->user()->residence}}" class="form-control" required>

                                        <label>Start year</label>
                                        <input type="number" name="start_year" value="{{auth()->guard('user')->user()->start_year}}" class="form-control" required>

                                        <label>End year</label>
                                        <input type="number" name="end_year" value="{{auth()->guard('user')->user()->end_year}}" class="form-control" required>

                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4">
                                        <button style="margin-top:6px;" class="btn btn-primary" type="submit" name="edit_info"><i class="fa fa-save"></i> Save change</button>
                                      </div>
                                      <div class="col-md-4"></div>
                                    </div>

                                  </form>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!--end of edit model modal-->

                  @endforeach
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-2"></div>
    </div>
</div> 
      
<!--display info due to user choise like : more or less infos -->
<script>
  function ViewMoreInfoFN(){
      var MoreInfo=document.getElementById('less_infos');
      document.getElementById("eye_shows_info").style.display="none";
      document.getElementById("moreInfoLine").style.display="none";
      MoreInfo.style.display="block";
  }

   function ViewLessInfoFN(){
      var LessInfo=document.getElementById('less_infos');
      document.getElementById("eye_shows_info").style.display="block";
      document.getElementById("moreInfoLine").style.display="block";
      LessInfo.style.display="none";
  }
</script>
@endsection