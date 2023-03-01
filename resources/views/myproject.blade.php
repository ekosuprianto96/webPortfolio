@extends('admin.admin-layout')

@section('content')
<div class="container-fluid mt-3 mb-3">
    <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add Project</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                </div>
                    <form action="" id="formAdd">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Project Name</label>
                                <input type="text" id="name" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Client Name</label>
                                <input type="text" id="name_client" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">URL Project</label>
                                <input type="url" id="url_web" class="form-control" />
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
                                    <label for="emailBasic" class="form-label">IMG Preview</label>
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
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" id="status1">
                                        <label class="form-check-label" for="status">
                                            UP Server
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" id="button-save1">
                            Save changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Edit --}}
    <div class="modal fade" id="formEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Project</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
                </div>
                    <form action="" id="formAdd">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Project Name</label>
                                <input type="text" id="name_edit" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Client Name</label>
                                <input type="text" id="name_client_edit" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameBasic" class="form-label">URL Project</label>
                                <input type="url" id="url_web_edit" class="form-control" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="emailBasic" class="form-label">Description</label>
                                    <textarea name="description" id="description_edit" cols="30" rows="10" class="form-control" style="height: 150px;"></textarea>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="emailBasic" class="form-label">IMG Preview</label>
                                    <input type="file" class="form-control" name="img" id="img_edit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="start_date_edit" class="form-label">Start Date</label>
                                    <input type="date" id="edit_start" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="edit_end" class="form-label">End Date</label>
                                    <input type="date" id="edit_end" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" id="status2">
                                        <label class="form-check-label" for="status">
                                            UP Server
                                        </label>
                                    </div>
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
    <div class="card p-3">
    <h5 class="card-header">All Project</h5>
    <a href="#" class="btn btn-primary m-3 mb-5" style="width: max-content;" type="button" data-bs-toggle="modal" data-bs-target="#add">Add Project</a>
    <div class="table-responsive text-nowrap" style="height: 450px">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th>Project Name</th>
            <th>Client</th>
            <th>Domain/URL</th>
            <th>Image Preview</th>
            <th>Status</th>
            <th>Start</th>
            <th>End</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($project as $proj) 
            <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $proj->name }}</strong></td>
                <td>{{ $proj->client }}</td>
                <td><a href="{{ $proj->url_web }}">{{ $proj->url_web }}</a></td>
                <td>
                    @if ($proj->image_prev === 'No Image')
                        {{ $proj->image_prev }}
                    @else
                        <img src="assets/images/image_project/{{ $proj->image_prev }}" alt="Avatar" class="img-fluid" width="80"/>
                    @endif
                </td>
                <td>
                    @if ($proj->status === 0)
                        <span class="badge bg-label-danger me-1">None Up</span>
                    @else
                        <span class="badge bg-label-primary me-1">Up Server</span>
                    @endif
                </td>
                <td>{{ Carbon\carbon::parse($proj->start_project)->format('d M Y') }}</td>
                <td>{{ Carbon\carbon::parse($proj->end_project)->format('d M Y') }}</td>
                <td>
                    <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item edit_button" href="javascript:void(0);"
                        id="{{ $proj->id }}" data-bs-target="#formEdit" data-bs-toggle="modal"><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="{{ url('deleteproject', $proj->id) }}"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                    </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
<script>
    const inputName = document.querySelector('#name');
    const inputNameClient = document.querySelector('#name_client');
    const inputUrlWeb = document.querySelector('#url_web');
    const inputDescription = document.querySelector('#description');
    const inputImage = document.querySelector('#img');
    const inputStartDate = document.querySelector('#start_date');
    const inputEndDate = document.querySelector('#end_date');
    const inputStatus = document.querySelector('#status1');
    const formSubmit = document.querySelector('#formAdd');
    const tokenCSRF = document.querySelector('#_token').getAttribute('content');
    inputStatus.addEventListener('click', () => {
        if (inputStatus.checked === true) {
            inputStatus.value = 1;
        }else {
            inputStatus.value = 0;
        }
        console.log(inputStatus.value)
    })
    formSubmit.addEventListener('submit', (e) => {
        e.preventDefault();
        const datas = new FormData();
        datas.append('name', inputName.value);
        datas.append('client', inputNameClient.value);
        datas.append('url_web', inputUrlWeb.value);
        datas.append('description', inputDescription.value);
        datas.append('start_date', inputStartDate.value);
        datas.append('end_date', inputEndDate.value);
        datas.append('status', inputStatus.value);
        datas.append('image_prev', inputImage.files[0]);

        fetch('/addproject', {
            method: 'POST',
            headers: {
                'Accept':'aplicaton/json, text-plain, */*',
                'X-CSRF-TOKEN': tokenCSRF,
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'same-origin',
            body: datas
        }).then(response => response.json())
        .then(result => {
            if(result.status) {
                window.location.reload();
            }else {
                console.log(result);
            }
        });
    })
    const editButton = document.querySelectorAll('.edit_button');
    const inputNameEdit = document.querySelector('#name_edit');
    const inputNameClientEdit = document.querySelector('#name_client_edit');
    const inputUrlWebEdit = document.querySelector('#url_web_edit');
    const inputDescriptionEdit = document.querySelector('#description_edit');
    const inputImageEdit = document.querySelector('#img_edit');
    const inputStartDateEdit = document.querySelector('#edit_start');
    const inputEndDateEdit = document.querySelector('#edit_end');
    const inputStatus2 = document.querySelector('#status2');
    const formSubmitEdit = document.querySelector('#formEdit');
    inputStatus2.addEventListener('click', () => {
        if (inputStatus2.checked === true) {
            inputStatus2.value = 1;
        }else {
            inputStatus2.value = 0;
        }
        console.log(inputStatus2.value)
    })
    editButton.forEach(button => {
        button.addEventListener('click', () => {
            const idButton = button.id;
            fetch(`/getproject/${idButton}`).then(response => response.json())
                .then(result => {
                    inputNameEdit.value = result.data.name;
                    inputNameClientEdit.value = result.data.client;
                    inputUrlWebEdit.value = result.data.url_web;
                    inputDescriptionEdit.value = result.data.description;
                    inputStartDateEdit.value = result.data.start_project;
                    inputEndDateEdit.value = result.data.end_project;
                    if(parseInt(result.data.status) === 1) {
                        inputStatus2.setAttribute('checked', true);
                        inputStatus2.value = 1;
                    }else {
                        inputStatus2.value = 0;
                        inputStatus2.removeAttribute('checked');
                    }
                });
            formSubmitEdit.addEventListener('submit', (e) => {
                e.preventDefault();
                const datasEdit = new FormData();
                datasEdit.append('id', idButton);
                datasEdit.append('name', inputNameEdit.value);
                datasEdit.append('client', inputNameClientEdit.value);
                datasEdit.append('url_web', inputUrlWebEdit.value);
                datasEdit.append('description', inputDescriptionEdit.value);
                datasEdit.append('start_date', inputStartDateEdit.value);
                datasEdit.append('end_date', inputEndDateEdit.value);
                datasEdit.append('status', inputStatus2.value);
                if(inputImageEdit.files[0] !== undefined) {
                    datasEdit.append('image_prev', inputImageEdit.files[0]);
                }

                fetch(`/updateproject`, {
                    method: 'POST',
                    headers: {
                        'Accept':'aplicaton/json, text-plain, */*',
                        'X-CSRF-TOKEN': tokenCSRF,
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    credentials: 'same-origin',
                    body: datasEdit
                }).then(response => response.json())
                .then(result => {
                    console.log(result)
                    if(result.status) {
                        window.location.reload();
                    }
                });
            })
        }) 
    });
</script>
@endsection