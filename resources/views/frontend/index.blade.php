@extends('layouts.frontend')

@section('title')
   Home
@endsection


@section('content')
   
   @include('frontend/slider')
   <div class="container">
   	  <div class="row">
   		 <div class="col-md-12 text-center">

   			<marquee><h1>Welcome to Poverty Alleviation Organization</h1></marquee>
   			<br><hr><br>
   			<h4 class="text-justify"><p>Poverty Alleviation Organization is an organization from which a citizen tries to make himself self-sufficient through loan for business purposes. Our company will primarily help the poor farmers and small businessmen (handicrafts) financially with small loans and will repay their loan after a certain period of time. And handicraft artists will sell their handicraft items.</p>
<br>
   			<p>Our goal is to make women and men self-reliant at the same time. Because women are usually interested in doing handicrafts, but that doesn't happen because of lack of funds. So we just wanted to give employment opportunities to these women. Bangladesh, on the other hand, is an agricultural country. Therefore, we are keen to give loans to farmers for development of agriculture.</p></h4>
   		 </div>
   	 </div>
   </div>
   
@endsection

@section('scripts')

@endsection