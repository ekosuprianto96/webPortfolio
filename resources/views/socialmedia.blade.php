@extends('admin.admin-layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">My Profile Settings / </span> Social Media
    </h4>

    <div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('myprofile') }}"
            ><i class="bx bx-user me-1"></i> Profile</a
            >
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"
            ><i class="bx bx-link-alt me-1"></i> Socialmedia</a
            >
        </li>
        </ul>
        <div class="row">
        <div class="col-lg-12 col-12">
            <div class="card">
            <h5 class="card-header">Social Accounts</h5>
            <div class="row px-3">
                <div class="col-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#socialmedia">Add Social Media</button>
                    <div class="modal fade" id="socialmedia" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add Socialmedia</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                                </div>
                                    <form action="">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                <label for="nameBasic" class="form-label">Name</label>
                                                <input type="text" id="name" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <label for="emailBasic" class="form-label">Link Social Media</label>
                                                    <input type="url" id="url" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="date" class="form-label">Social Media</label>
                                                    <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                                        <option selected>Social Media Icon</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>Display content from social accounts on your site</p>
                <!-- Social Accounts -->
                <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img
                    src="admin/assets/img/icons/brands/facebook.png"
                    alt="facebook"
                    class="me-3"
                    height="30"
                    />
                </div>
                <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                    <h6 class="mb-0">Facebook</h6>
                    <small class="text-muted">Not Connected</small>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                    <button type="button" class="btn btn-icon btn-outline-secondary">
                        <i class="bx bx-link-alt"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img
                    src="admin/assets/img/icons/brands/twitter.png"
                    alt="twitter"
                    class="me-3"
                    height="30"
                    />
                </div>
                <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                    <h6 class="mb-0">Twitter</h6>
                    <a href="https://twitter.com/Theme_Selection" target="_blank">@ThemeSelection</a>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                    <button type="button" class="btn btn-icon btn-outline-danger">
                        <i class="bx bx-trash-alt"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img
                    src="admin/assets/img/icons/brands/instagram.png"
                    alt="instagram"
                    class="me-3"
                    height="30"
                    />
                </div>
                <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                    <h6 class="mb-0">instagram</h6>
                    <a href="https://www.instagram.com/themeselection/" target="_blank">@ThemeSelection</a>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                    <button type="button" class="btn btn-icon btn-outline-danger">
                        <i class="bx bx-trash-alt"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img
                    src="admin/assets/img/icons/brands/dribbble.png"
                    alt="dribbble"
                    class="me-3"
                    height="30"
                    />
                </div>
                <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                    <h6 class="mb-0">Dribbble</h6>
                    <small class="text-muted">Not Connected</small>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                    <button type="button" class="btn btn-icon btn-outline-secondary">
                        <i class="bx bx-link-alt"></i>
                    </button>
                    </div>
                </div>
                </div>
                <div class="d-flex">
                <div class="flex-shrink-0">
                    <img
                    src="admin/assets/img/icons/brands/behance.png"
                    alt="behance"
                    class="me-3"
                    height="30"
                    />
                </div>
                <div class="flex-grow-1 row">
                    <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                    <h6 class="mb-0">Behance</h6>
                    <small class="text-muted">Not Connected</small>
                    </div>
                    <div class="col-4 col-sm-5 text-end">
                    <button type="button" class="btn btn-icon btn-outline-secondary">
                        <i class="bx bx-link-alt"></i>
                    </button>
                    </div>
                </div>
                </div>
                <!-- /Social Accounts -->
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- / Content -->
@endsection