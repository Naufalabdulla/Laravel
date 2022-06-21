@extends('layouts.main')

@section('title', 'Sale')
@section('extra')

@endsection
@section('container')

<div class="container border-bottom row g-3 p-2 mb-2">
    <div class="col-2">
      <div class="border">Outlet</div>    
    </div>    
  
    <div class="col-2">
      <div class="border">date</div>    
    </div> 
  
    <div class="col-2">
      <div class="border">ip</div>    
    </div>
  
    <div class="col-2">
      <div class="border">search</div>    
    </div>
  
    <div class="col-2">
      <div class="border">person</div>    
    </div> 
</div>
  
<div class="row g-3">
    <div class="col-4">
        <div class="vstack gap-3">
            <div class="nav nav-tabs d-flex" id="my" role="tablist">
            <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link flex-fill bg-light" data-bs-toggle="" id="" data-bs-target="" type="button" role="tab" aria-selected="false">Top</button>
            </div>

            <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link flex-fill bg-light" data-bs-toggle="" id="" data-bs-target="" type="button" role="tab" aria-selected="false">Shoes</button>
            </div>

            <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link flex-fill bg-light" data-bs-toggle="" id="" data-bs-target="" type="button" role="tab" aria-selected="false">Acc</button>
            </div>
            </div>

            <div class="row g-4">
                {{-- @foreach ($contacts as $item) --}}
                    <div class="col-3">
                        <div class="border">
                            {{-- {{$item->name}} --}}yes
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="border">
            <div class="container-fluid hstack bg-primary opacity-25 p-2">
                <p>Current sale</p>
                <input type="text" class="form-control form-control-sml" placeholder="Search" aria-label="Search" style="max-width: 250px">
            </div>

            <div class="border d-flex bg-light p-2">
                <div class="px-3 flex-grow-1">Name</div>
                <div class="px-3">Code</div>
                <div class="px-3">QTY</div>
                <div class="px-3">Price Disx</div>
                <div class="px-3">Total</div>
            </div>

            <div style="height: 250px"></div>
        </div>

        <div class="d-flex align-items-start border" style="max-width: 200px">
            <div class="hstack gap-0">
                <div class="border bg-light p-2">Amount</div>
                <div class="me-5"> 53</div>
            </div>
        </div>

        <div class="row g-2 my-1">
            <div class="col-3">
                <div class="border bg-light p-2">No Tax</div>
            </div>

            <div class="col-3">
                <div class="border bg-light p-2">Discount</div>
            </div>
        </div>

        <div class="row g-2 my-2">
            <div class="col-3"><div class="border bg-light p-3">Fullfillment</div></div>
            <div class="col-2"><div class="border bg-light p-3">Note</div></div>
            <div class="col-3"><div class="border bg-light p-3">Clear</div></div>
            <div class="col-4"><div class="border bg-success p-3">Pay</div></div>
        </div>
    </div>
</div>


@endsection