@extends('layouts.contentLayoutMaster')

@section('title', __('locale.pages.tests'))

@section('content')
<section >
  
  <div class="col-12 my-2">
    <div class="row align-items-center">
      <a class="btn btn-success" href="{{ route('classes-free.create') }}">
        <span>@lang('locale.buttons.create')</span>
        <i class="ficon bx bx-plus"></i>  
      </a>
    </div>
  </div>
  
</section>
@endsection