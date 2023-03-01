@extends('admin.admin-layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <i style="font-size: 3em;" class='bx bxs-group'></i>
            </div>
          </div>
          <span class="d-block mb-1">Pengguna</span>
          <h3 class="card-title text-nowrap mb-2">{{ $pengguna }}</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <i style="font-size: 3em;" class='bx bx-show'></i>
            </div>
          </div>
          <span class="d-block mb-1">Pengunjung</span>
          <h3 class="card-title text-nowrap mb-2">{{ $pengunjung }}</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <i style="font-size: 3em;" class='bx bxs-message-detail'></i>
            </div>
          </div>
          <span class="d-block mb-1">Message Received</span>
          <h3 class="card-title text-nowrap mb-2">{{ $message }}</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h1>Email Inbox</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td style="white-space: nowrap;">Subject</td>
                  <td style="white-space: nowrap;">Message</td>
                  <td style="white-space: nowrap;">Created At</td>
                  <td style="white-space: nowrap;">Status</td>
                  <td style="white-space: nowrap;">Action</td>
                </tr>
              </thead>
              <tbody>
                @foreach($contact as $index => $cont)
                <tr>
                  <td>{{ $index + $contact->firstItem() }}</td>
                  <td style="white-space: nowrap;">{{ $cont->name }}</td>
                  <td style="white-space: nowrap;">{{ $cont->email }}</td>
                  <td style="white-space: nowrap;">{{ $cont->subject }}</td>
                  <td style="white-space: nowrap;text-overflow: ellipsis;max-width: 100px;overflow: hidden">{{ $cont->message }}</td>
                  <td style="white-space: nowrap;">{{ $cont->created_at->format('d M Y') }}</td>
                  <td style="white-space: nowrap;">
                    <span class="badge bg-label-{{ $cont->status === 0 ? 'danger' : 'success' }} me-1">{{ $cont->status === 0 ? 'Belum Dibaca' : 'Sudah Dibaca' }}</span>
                  </td>
                  <td style="white-space: nowrap;">
                    <a href="{{ route('contact.view', $cont->id) }}" class="btn btn-sm btn-success"><i class='bx bx-show'></i> View</a>
                    <a href="{{ route('contact.delete', $cont->id) }}" class="btn btn-sm btn-danger"><i class='bx bx-trash'></i> Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="row">
              <div class="col-12">
                {{ $contact->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
