@extends('layouts.master')


@section('title')
    Edit Farmer Info | Poverty Alleviation 
@endsection


@section('content')

  <div class="container">
  	 <div class="row">
  		<div class="col-md-12">
  			<div class="card">
  				<div class="card-header">
  					<h4>Edit Farmer Info</h4>
          </div>
  				<div class="card-body">
  					<div class="row">
  						<div class="col-md-6">
  							
		  				  <form action="/update-farmer-info/{{ $farmers->id }}" method="POST">
		  				    	 @csrf 
		  				    	 @method('PUT') <!-- {{ method_field('PUT') }} -->

                  <input type="hidden" name="id" value="{{ $farmers->id }}">

		  				   <div class="form-group">
								   <label>Name</label>
								   <input type="text" name="lastname" value="{{ $farmers->lastname }}" class="form-control">			
								 </div>

                 <div class="form-group">
                   <label>Father Name</label>
                   <input type="text" name="fathername" value="{{ $farmers->fathername }}" class="form-control">      
                 </div>

                 <div class="form-group">
                   <label>Mother Name</label>
                   <input type="text" name="mothername" value="{{ $farmers->mothername }}" class="form-control">      
                 </div>

                 <div class="form-group">
                   <label>Mobile No</label>
                   <input type="text" name="mobile" value="{{ $farmers->mobile }}" class="form-control">      
                 </div>

								 <button type="submit" class="btn btn-success">Update</button>
								 <a href="/farmerlist" class="btn btn-danger">Cancel</a>
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