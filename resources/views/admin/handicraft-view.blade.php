@extends('layouts.master')


@section('title')
    Handicraft List | Poverty Alleviation 
@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Handicrafts Info</h4>
                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                 @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                      <th>Image</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Father Name</th>
                      <th>Mother Name</th>
                      <th>Mobile</th>
                      <th>Gender</th>
                      <th>Dofb</th>
                      <th>Age</th>
                      <th>NID</th>
                      <th>Address</th>
                      <th>District</th>
                      <th>Division</th>
                      <th>ZipCode</th>
                      <th>Amount</th>
                      <th>Wealth</th>
                      <th>Paper</th>
                      <th>LOAN</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>

                    @foreach($handicrafts as $row)
                      <tr>
                      	<td><img src="{{ asset('uploads/handicraft/' . $row->image) }}" width="100px" height="50px" alt="Image"></td>
                        <td>{{ $row->firstname }}</td>
                        <td>{{ $row->lastname }}</td>
                        <td>{{ $row->fathername }}</td>
                        <td>{{ $row->mothername }}</td>
                        <td>{{ $row->mobile }}</td>
                        <td>{{ $row->gender }}</td>
                        <td>{{ $row->dofb }}</td>
                        <td>{{ $row->age }}</td>
                        <td>{{ $row->nid }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->district }}</td>
                        <td>{{ $row->division }}</td>
                        <td>{{ $row->zipcode }}</td>
                        <td>{{ $row->amount }}</td>
                        <td>{{ $row->land }}</td>
                        <td>{{ $row->paper }}</td>
                        <td>
                          <a href="/loan/{{ $row->id }}" class="btn btn-success">Loan Preview</a>
                        </td>
                        <td>
                          <a href="/farmer-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                           <form action="/role-delete/{{ $row->id }}" method="POST">
                              @csrf 
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">DELETE</button>
                           </form>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>                  
                  </table>
                </div>
              </div>
            </div>
          </div>
     </div>



@endsection


@section('scripts')

@endsection