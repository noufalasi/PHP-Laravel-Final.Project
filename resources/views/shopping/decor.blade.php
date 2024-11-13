@extends('layouts.appuserui')


@section('content')

<div class="container">
<div class="row mt-5">
<div class="col"> 
 @foreach($product as $item)

 <div class="row mt-3">
<div class="col">
<div class="card">

<div class="card-body">

<div class="row">
    <div class="col">
<imge src ="https://eu.baobabcollection.com/cdn/shop/products/5415198125056_bougiemarble_lifestyle_1100x.jpg?v=1669133298" width="200" hieght="200">

    </div>
    <div class="col">

    <h1 class= "alert alert-success">{{$item->name}}</h1>
    <p>{{$item->Description}}</p>
    </div>
</div>
<div class="row mt-2">

<div class="col text-center">

<a href="{{route('product_decor',['id'=>$item->id])}}" class="btn btn-primary">تفاصيل</a>
</div>
</div>

</div>
</div>

</div>

 </div>
 @endforeach

</div>



</div>


</div>




@endsection