@extends('layouts.main')

@section('title', 'Mahasiswa - Upload')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">@yield('pageheading', 'Upload Files')</h1>

    <!-- Form Add Product -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Files</h6>
        </div>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="submit">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                            placeholder="Full Name..." name="fullname" value="{{ old('fullname') }}">
                        @error('fullname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sex">Gender</label>
                        <div class="custom-control custom-radio">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="male" name="gender" value="male">
                                <label class="custom-control-label" for="male">Male</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="female" name="gender">
                                <label class="custom-control-label" for="female">Female</label>
                              </div>
                            <!--<label for="gender">Gender</label>
                            <input type="radio" class="custom-control-input radio-inline" id="customRadio" name="radio" value="male">Male</label>
                            <input type="radio" class="custom-control-input radio-inline" id="customRadio" name="radio" value="male">Male</label>
                            <label class="custom-control-label" for="customRadio">Male</label>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dateofbirth">Date of birth</label>
                        <input type="date" class="form-control @error('dateofbirth') is-invalid @enderror"
                            placeholder="Date of birth..." name="dateofbirth"
                            value="{{ old('dateofbirth') }}">
                        @error('dateofbirth')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image (.jpg, .jpeg, .png)</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" >
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="cert">Certificate (zip or rar)</label>
                        <input type="file" class="form-control-file @error('cert') is-invalid @enderror" name="cert" value="{{ old('cert') }}" >
                        @error('cert')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="cv">CV (.pdf)</label>
                        <input type="file" class="form-control-file @error('cv') is-invalid @enderror" name="cv" value="{{ old('cv') }}" >
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div>
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-primary btn-add-product-user">Submit</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End of Form Add Data --}}

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
