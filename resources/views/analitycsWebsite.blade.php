@extends('admin.admin-layout')

@section('content')
@push('tailwind')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
      <!-- Total Revenue -->
    <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
          <div class="row row-bordered g-0">
            <div class="col-md-12 p-4">
              {!! $chart->container() !!}
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                <h1>Data Pengunjung Website</h1>
              </div>
              <div class="col-md-6">
                <form action="{{ route('analityc.search') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-6">
                      <input class="form-control" id="month" name="month" type="month">
                    </div>
                    <div class="col-6">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Tgl/Bulan/Tahun</td>
                  <td>Visitor</td>
                  <td>Device</td>
                </tr>
              </thead>
              <tbody>
                @if($visitors->count() > 0)
                  @foreach($visitors as $index => $value)
                    <tr>
                      <td>{{ $index + $visitors->firstItem() }}</td>
                      <td>{{ $value->created_at->format('d M Y') }}</td>
                      <td>{{ $value->uuid }}</td>
                      <td>{{ $value->device }}</td>
                    </tr>
                  @endforeach
                @else
                    <tr>
                      <td colspan="12" class="text-center"><h1>No Data</h1></td>
                    </tr>
                @endif
              </tbody>
            </table>
            <div class="row mt-3">
              <div class="col">
                @if($visitors->count() > 0)
                  {{  $visitors->links() }}
                @endif
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<script src="{{  $chart->cdn()  }}"></script>
{!! $chart->script() !!}
@endsection