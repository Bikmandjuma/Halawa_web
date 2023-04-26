@extends('User.Cover')
@section('content')
<br>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="overflow:auto;">
		
		@if(session('status'))
		    <script type="text/javascript">toastr.success("Password changed successfully !")</script>
		@endif
		
		<div class="card">
			<div class="card-header text-center bg-info">Manage your pasword</div>
			<div class="card-body">
				<form action="{{route('changepassword')}}" method="POST">
				@csrf            
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password" value="{{old('old_password')}}">
                                @if(session('error'))<span style="color:red;">{{session('error')}}</span> @endif
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>
					<button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-save"></i>&nbsp; Save change</button>
				</form>

			
			</div>
		</div>
			
	</div>
	<div class="col-md-4"></div>
</div>

@endsection

