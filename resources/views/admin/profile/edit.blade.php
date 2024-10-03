@extends('admin.layouts.admin')

@section('title', 'Edit Account')

@section('css')

@endsection


@section('admin')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Admin Profile</h5>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Personal Information -->
                            <div class="mb-4">
                                <h6 class="fw-bold mb-4">Personal Information</h6>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-4 mb-3">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                            id="first_name" name="first_name"
                                            value="{{ old('first_name', $user->first_name) }}">
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                            id="last_name" name="last_name"
                                            value="{{ old('last_name', $user->last_name) }}">
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="other_name" class="form-label">Other Name</label>
                                        <input type="text" class="form-control @error('other_name') is-invalid @enderror"
                                            id="other_name" name="other_name"
                                            value="{{ old('other_name', $user->other_name) }}">
                                        @error('other_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ old('username', $user->username) }}">
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email', $user->email) }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="mb-4">
                                <h6 class="fw-bold mb-4">Contact Information</h6>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-6 mb-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            id="address" name="address" value="{{ old('address', $user->address) }}">
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror"
                                            id="city" name="city" value="{{ old('city', $user->city) }}">
                                        @error('city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control @error('state') is-invalid @enderror"
                                            id="state" name="state" value="{{ old('state', $user->state) }}">
                                        @error('state')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="zip" class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control @error('zip') is-invalid @enderror"
                                            id="zip" name="zip" value="{{ old('zip', $user->zip) }}">
                                        @error('zip')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control @error('country') is-invalid @enderror"
                                            id="country" name="country" value="{{ old('country', $user->country) }}">
                                        @error('country')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="mb-4">
                                <h6 class="fw-bold  mb-4">Additional Information</h6>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-6 mb-4">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            id="dob" name="dob"
                                            value="{{ old('dob', $user->dob ? $user->dob->format('Y-m-d') : '') }}">
                                        @error('dob')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-control @error('gender') is-invalid @enderror" id="gender"
                                            name="gender">
                                            <option value="">Choose...</option>
                                            <option value="male"
                                                {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female"
                                                {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="other"
                                                {{ old('gender', $user->gender) == 'Other' ? 'selected' : '' }}>Other
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="occupation" class="form-label">Occupation</label>
                                        <input type="text"
                                            class="form-control @error('occupation') is-invalid @enderror"
                                            id="occupation" name="occupation"
                                            value="{{ old('occupation', $user->occupation) }}">
                                        @error('occupation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Profile Photo -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Profile Photo</h6>
                                <div class="row g-3">
                                    <div class="col-md-6 mb-4">
                                        @if ($user->photo)
                                            <div class="mb-2">
                                                <img src="{{ $user->photo }}"
                                                    alt="Current profile photo" class="img-thumbnail"
                                                    style="max-width: 150px;">
                                            </div>
                                        @endif
                                        <input type="file" class="form-control @error('photo') is-invalid @enderror"
                                            id="photo" name="photo" accept="image/*">
                                        @error('photo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                <a href="{{ route('admin.profile') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('javascript')
