@extends('layouts.master')


@section('title')
    Farmer List | Poverty Alleviation 
@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Farmer Info</h4>
                <img src="{{ asset('uploads/farmer/' . $value->image) }}" width="60px" height="50px">
                {{ $value->firstname}}
                {{ $value->mobile}}

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
                      <th>Serial</th>
                      <th>Amount</th>
                      <th>Action</th>
                      <th></th>

                    </thead>
                    <tbody>

                  @for($count=1;$count<=6; $count++)
                  <tr>
                        <td>{{$count }}</td>
                        <td>{{ $value->totalamount /6}}</td>

                        <td>
                          <a href="/payment_paid/{{ $value->id }}" class="btn btn-success">Paid</a>
                        </td>

                      </tr>

                  @endfor


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