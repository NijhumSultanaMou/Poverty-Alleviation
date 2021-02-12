@extends('layouts.frontend')

@section('title')
   Handicraft
@endsection


@section('content')


               
                 
      <div class="container">
         <div class="#" style="margin-top: 20px">
           <form action="{{ route('handicraft-data')}}" method="post" enctype="multipart/form-data">
            @csrf 

             @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                 @endif      
        
               <h3 class="text-center"><b text=color:red>HANDICRAFT LOAN</b></h3>
               <hr>

               <div class="row">
                 <div class="col-md-6">              
                     <div class="form-group">
                      <label>First Name:</label>
                          <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                      <label>Last Name:</label>
                          <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                     </div>
                 </div>
               </div>


               <div class="row">
                 <div class="col-md-6">              
                     <div class="form-group">
                      <label>Father's Name:</label>
                          <input type="text" class="form-control" name="fathername" placeholder="Enter Father's Name">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                      <label>Mother's Name:</label>
                          <input type="text" class="form-control" name="mothername" placeholder="Enter Mother's Name"> 
                     </div>
                 </div>
               </div>


               <div class="row">
                 <div class="col-md-6">              
                     <div class="form-group">
                      <label>Mobile No:</label>
                          <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
                     </div>
                 </div>
                 <div class="col-md-6">
                     <lebel>Image:</lebel>
                     <div class="custom-file">               
                       <input type="file" name="image" class="custom-file-input">
                     <label class="custom-file-label">Choose file</label>
                    </div>
                 </div>
               </div>

<hr>
               <div class="row">
                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="Gender">Gender:</label>
                        <select class="form-control" name="gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                    </div>              
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label>Date Of Birth:</label>
                          <input type="Date" class="form-control" name="dofb" placeholder="Enter Last Name">
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label>Age:</label>
                          <input type="text" class="form-control" name="age" placeholder="Enter Your Age">
                     </div>
                 </div>
               </div>

                <div class="row">
                 <div class="col-md-12">              
                     <div class="form-group">
                      <label>NID NO:</label>
                          <input type="text" class="form-control" name="nid" placeholder="Enter Nid No">
                     </div>
                 </div>
               </div>

               <hr>

               <div class="row">
                 <div class="col-md-12">              
                     <div class="form-group">
                      <label>Address:</label>
                          <input type="text" class="form-control" name="address" placeholder="Enter Address">
                     </div>
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-4">  
                    <div class="form-group">
                        <label for="district">District:</label>
                        <select class="form-control" name="district">
                          <option>None</option>
                          <option>dhaka</option>
                          <option>rajshahi</option>
                          <option>rangpur</option>
                          <option>gaibandha</option>
                          <option>bogura</option>
                          <option>dinajpur</option>
                          <option>kurigram</option>
                          <option>khulna</option>
                          <option>naogone</option>
                          <option>nator</option>
                          <option>kumilla</option>
                          <option>feni</option>
                        </select>
                    </div>              
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                        <label for="division">Division:</label>
                        <select class="form-control" name="division">
                          <option>None</option>
                          <option>Dhaka</option>
                          <option>Rajshahi</option>
                          <option>Rangpur</option>
                          <option>Khulna</option>
                          <option>Chittagong</option>
                          <option>Dinajpur</option>
                          <option>Maymanshing</option>
                          <option>Khulna</option>
                          <option>Sylhet</option>
                        </select>
                    </div> 
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label>ZIP Code:</label>
                          <input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode">
                     </div>
                 </div>
               </div>


               <div class="row">
                 <div class="col-md-4">
                     <div class="form-group">
                      <label>Amount:</label>
                          <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label>Wealth:</label>
                          <input type="text" class="form-control" name="land" placeholder="Enter wealth">
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="form-group">
                      <label>Paper:</label>
                          <input type="text" class="form-control" name="paper" placeholder="Yes/No">
                     </div>
                 </div>
               </div>     
              
<br>
            <button type="submit" name="submit" class="btn btn-primary">save data</button>
<br><br>
          </form>  
         </div>
        </div>



@endsection

@section('scripts')

@endsection