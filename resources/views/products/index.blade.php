@extends('layouts.index')
@section('content')
    <section class="py-1">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @each('dashboards.cards',$products,'products','dashboards.no-models')
            </div>
        </div>
    </section>
    <style scoped> .pagination { justify-content: center!important; margin-bottom: 100px !important;} </style>
    <div class="mb-5">
    {{$products->links()}}</div>
@endsection
