@extends('layouts.appuserui')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-end"> أهلا بكم في منصتنا الإليكترونية لتسويق المنتجات المنزلية</h3>
            <p class="text-end text-info">منصة رائدة لتسويق الأدوات المنزلية وبأفضل الأسعار </p>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col">
        <a href="{{route('decor')}}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col text-end">
                            <h3>زينة</h3>
                        </div>
                        <div class="col text-end">
                        <i class="bi bi-flower2 text-danger h1"></i>
                        </div>
                    </div>
                </div>
            </div>
         </a>
        </div>
        <div class="col">
        <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col text-end">
                            <h3>ادوات المطبخ</h3>
                        </div>
                        <div class="col text-end">
                        <i class="bi bi-house h1 text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <div class="col">
            <a href="{{route('electric')}}">
                <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-end">
                                    <h3>إليكترونيات</h3>
                                </div>
                                <div class="col text-end">
                                <i class="bi bi-phone-vibrate-fill h1" ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
    </div>
</div>

@endsection
