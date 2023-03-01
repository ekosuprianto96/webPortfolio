@extends('admin.admin-layout')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <h3>My Graduation</h3>
        </div>
        <div class="col-12">
            <a href="#" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add">Add Graduation</a>
            <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Graduation</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        </div>
                            <form action="" id="save">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">Name</label>
                                        <input type="text" id="name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">URL Graduate</label>
                                        <input type="url" id="url" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-3">
                                            <label for="emailBasic" class="form-label">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-3">
                                            <label for="emailBasic" class="form-label">IMG Certificate</label>
                                            <input type="file" class="form-control" name="img" id="img">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="date" class="form-label">Start Date</label>
                                            <input type="date" id="start_date" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="date" class="form-label">End Date</label>
                                            <input type="date" id="end_date" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary" id="button-save">
                                    Save changes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Graduation</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        </div>
                            <form action="" id="edit">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">Name</label>
                                        <input type="text" id="edit_name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                        <label for="nameBasic" class="form-label">URL Graduate</label>
                                        <input type="url" id="edit_url" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-3">
                                            <label for="emailBasic" class="form-label">Description</label>
                                            <textarea name="description" id="edit_description" cols="30" rows="10" class="form-control" style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-3">
                                            <label for="emailBasic" class="form-label">IMG Certificate</label>
                                            <input type="file" class="form-control" name="img" id="edit_img">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="date" class="form-label">Start Date</label>
                                            <input type="date" id="edit_start_date" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="date" class="form-label">End Date</label>
                                            <input type="date" id="edit_end_date" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary" id="button-save2">
                                    Save changes
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="row">
            <div class="container" id="alert-image">
        
            </div>
        </div>
        @foreach($graduations as $gr)
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $gr->name }}</h5>
                    <div class="card-text">
                    {{ $gr->description }}
                    </div>
                    <p class="card-text mt-2">{{ Carbon\carbon::parse($gr->start_date)->format('d M Y') }} - {{ Carbon\carbon::parse($gr->end_date)->format('d M Y') }}</p>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ url('detailgraduate', $gr->id) }}" class="card-link">Detail</a>
                        </div>
                        <div class="col-6 d-flex justify-content-end align-items-center">
                            <a href="#" id="{{ $gr->id }}" class="button-edit text-decoration-none btn btn-primary btn-sm m-2" data-bs-target="#edit" data-bs-toggle="modal">Edit</a>
                            <a href="{{ url('deletegraduate', $gr->id) }}" class="text-decoration-none btn btn-sm btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    const formSubmit = document.querySelector('#save');

    formSubmit.addEventListener('submit', (e) => {
        e.preventDefault();
        document.querySelector('#button-save').innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...`
        const tokenCSRF = document.querySelector('#_token').getAttribute('content');
        const datas = new FormData();
        datas.append('file', document.querySelector('#img').files[0]);
        datas.append('name', document.querySelector('#name').value);
        datas.append('description', document.querySelector('#description').value);
        datas.append('url', document.querySelector('#url').value);
        datas.append('start_date', document.querySelector('#start_date').value);
        datas.append('end_date', document.querySelector('#end_date').value);
        // data.append('date', document.querySelector('#date').value);
        fetch('/addgraduation', {
            method: 'post',
            headers: {
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                'X-CSRF-TOKEN' : tokenCSRF
            },
            credentials: 'same-origin',
            body: datas
        }).then(res => res.json())
        .then(data => {
            if (data.status) {
                window.location.reload()
            }else {
                console.log(data)
            }
        })
    })

    const editForm = document.querySelector('#edit');
    const buttonEdit = document.querySelectorAll('.button-edit');
    const inputName = document.querySelector('#edit_name');
    const inputDescription = document.querySelector('#edit_description');
    const inputUrl = document.querySelector('#edit_url');
    const inputStartDate = document.querySelector('#edit_start_date');
    const inputEndDate = document.querySelector('#edit_end_date');
    const inputImage = document.querySelector('#edit_img');
    const formImage = new FormData();
    buttonEdit.forEach(btn => {
            btn.addEventListener('click', () => {
            const idButton = btn.id;
            fetch(`/updategraduate/${idButton}`)
            .then(response => response.json())
            .then(result => {
                
                inputName.value = result.data.name;
                inputDescription.value = result.data.description;
                inputEndDate.value = result.data.end_date;
                inputStartDate.value = result.data.start_date;
                inputUrl.value = result.data.url_graduate
            });
            editForm.addEventListener('submit', (e) => {
                e.preventDefault()
                document.querySelector('#button-save2').innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...`
                formImage.append('id', idButton);
                formImage.append('name', inputName.value);
                formImage.append('description', inputDescription.value);
                formImage.append('url', inputUrl.value);
                formImage.append('start_date', inputStartDate.value);
                formImage.append('end_date', inputEndDate.value);
                if (inputImage.files[0] !== undefined) {
                    formImage.append('file', inputImage.files[0]);
                }
                fetch(`/updategraduate`, {
                    method: 'POST',
                    headers: {
                        'Accept': 'aplication/json, text-plain, */*',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN' : document.querySelector('#_token').getAttribute('content')
                    },
                    credentials: 'same-origin',
                    body: formImage
                })
                .then(response => response.json())
                .then(result => {
                    if(result.status) {
                        window.location.reload();
                    }
                })
            })
        })
    });
    
</script>
@endsection