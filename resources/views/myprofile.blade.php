@extends('admin.admin-layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Profile Settings /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('socialmedia') }}"
                    ><i class="bx bx-link-alt me-1"></i> Socialmedia</a
                    >
                </li>
            </ul>
            <div class="card mb-4">
                
                    <h5 class="card-header">Profile Details</h5>
                    <div class="container" id="alert-image">
                        
                    </div>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img 
                                src="assets/images/fotoProfile/{{ $profile->image }}"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                            />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input
                                    name="file"
                                    type="file"
                                    id="upload"
                                    class="account-file-input"
                                    hidden
                                    accept="image/png, image/jpeg"
                                    required
                                />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form action="{{ route('updateprofile') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Full Name</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="fullname"
                                        name="fullname"
                                        value="{{ $profile->name }}"
                                        autofocus
                                        required
                                    />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="date" class="form-label">Your Birthday</label>
                                    <input required data-value="{{ $profile->birthdate }}" class="form-control" type="text" name="date" id="date" value="{{ $profile->birthdate }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="email"
                                        name="email"
                                        value="{{ $profile->email }}"
                                        placeholder="john.doe@example.com"
                                        required
                                    />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">US (+62)</span>
                                        <input
                                        type="text"
                                        id="phoneNumber"
                                        name="phoneNumber"
                                        class="form-control"
                                        value="{{ $profile->phone_number }}"
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Text About</label>
                                    <textarea required class="form-control" name="text_about" id="text_about" cols="30" rows="10" style="height: 150px;">{{ $profile->text_about }}</textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input required value="{{ $profile->address }}" type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                </div>
                                {{-- <div class="mb-3 col-md-6">
                                    <label class="form-label" for="country">Country</label>
                                    <select id="country" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="language" class="form-label">Language</label>
                                    <select id="language" class="select2 form-select">
                                        <option value="">Select Language</option>
                                        <option value="en">English</option>
                                        <option value="fr">French</option>
                                        <option value="de">German</option>
                                        <option value="pt">Portuguese</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="timeZones" class="form-label">Timezone</label>
                                    <select id="timeZones" class="select2 form-select">
                                        <option value="">Select Timezone</option>
                                        <option value="-12">(GMT-12:00) International Date Line West</option>
                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                        <option value="-9">(GMT-09:00) Alaska</option>
                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                        <option value="-7">(GMT-07:00) Arizona</option>
                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Central America</option>
                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="currency" class="form-label">Currency</label>
                                    <select id="currency" class="select2 form-select">
                                        <option value="">Select Currency</option>
                                        <option value="usd">USD</option>
                                        <option value="euro">Euro</option>
                                        <option value="pound">Pound</option>
                                        <option value="bitcoin">Bitcoin</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            </div>
                        </form>
                    </div>
                <!-- /Account -->
            </div>
        </div>
    </div>
</div>
<script>
    const inputUpload = document.querySelector('#upload');
    const inputDate = document.querySelector('#date');
    const token = document.querySelector('#_token').getAttribute('content');
    // inputDate.addEventListener('click', () => {
        
    //     inputDate.setAttribute('type', 'date');
    //     inputDate.addEventListener('blur', () => {
    //         inputDate.setAttribute('type', 'text');
    //         inputDate.value = inputDate.getAttribute('data-value');
    //     })
    // })
    inputUpload.addEventListener('change', (e) => {
        const data = new FormData();
        data.append('file', document.querySelector('#upload').files[0])
        fetch('/uploadimage', {
            method:'post',
            headers: {
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                'X-CSRF-TOKEN': token,
            },
            credentials: 'same-origin',
            body: data
        }).then(response => response.json())
        .then(data => {
            if(data.status === 'true') {
                    document.querySelector('#alert-image').innerHTML = `<div class="alert alert-success alert-dismissible" role="alert">
                                ${data.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                }else if (data.status === 'false') {
                    document.querySelector('#alert-image').innerHTML = `<div class="alert alert-danger alert-dismissible" role="alert">
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>`
                
            }
        })
    })
</script>
@endsection