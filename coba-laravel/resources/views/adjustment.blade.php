@extends('layouts.main')

@section('title', 'Adjustment')
@section('extra')
    
@endsection
@section('container')
<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="archive-tab" data-bs-toggle="tab" data-bs-target="#archive-tab-pane" type="button" role="tab" aria-controls="archive-tab-pane" aria-selected="flase">Archive</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock-tab-pane" type="button" role="tab" aria-controls="stock-tab-pane" aria-selected="false">Stock take by CSV</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
        <button class="nav-link" id="take-tab" data-bs-toggle="tab" data-bs-target="#take-tab-pane" type="button" role="tab" aria-controls="take-tab-pane" aria-selected="false">Stock take by web spreadsheet</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="archive-tab-pane" role="tabpanel" aria-labelledby="archive-tab" tabindex="0">
    <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-6 mt-1">Type</h6>
        <h6 class="col-5 mt-1">count</h6>
        <h6 class="col-1 mt-1">Amount</h6>
    </div>

    {{-- @foreach ($Supplies as $item) --}}
        <div class="row border-bottom p-2 mx-2 mb-1">
            <div>
            <input class="form-check-input" type="checkbox" value="" id="check">
            <label for="check"> 
            </div>
              <div class="col-6">dummy</div>
              <div class="col-4">2</div>
              <div class="col-1">277</div>
            </label>
        </div>          
     {{-- @endforeach   --}}
  </div>
</div>
@endsection