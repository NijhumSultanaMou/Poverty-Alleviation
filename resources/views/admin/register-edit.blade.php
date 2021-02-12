@extends('layouts.master')


@section('title')
    Edir-Registered | Poverty Alleviation 
@endsection


@section('content')

  <div class="container">
  	 <div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					<h4>Edit Register Users</h4>
          </div>
  				<div class="card-body">
  					<div class="row">
  						<div class="col-md-6">
  							
		  				    <form action="/role-register-update/{{ $users->id }}" method="POST">
		  				    	 @csrf 
		  				    	 @method('PUT') <!-- {{ method_field('PUT') }} -->

		  				    	 <div class="form-group">
								   <label>Name</label>
								   <input type="text" name="username" value="{{ $users->name }}" class="form-control">			
								 </div>

								 <div class="form-group">
								   <label>Phone</label>
								   <input type="text" name="phone" value="{{ $users->phone }}" class="form-control">			
								 </div>

								 <button type="submit" class="btn btn-success">Update</button>
								 <a href="/role-register" class="btn btn-danger">Cancel</a>
		  				    </form>	

		  				</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	 </div>
  </div>		



@endsection



@section('scripts')

@endsection