@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Store</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Store</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <form name="" id="" method="post" action="{{ route('adminrawbrandprod.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title">Raw Material Products Quantity In</h5>
                        <hr />
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="border border-3 p-4 rounded">

                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" value="{{ old('date') }}"
                                                class="form-control @error('date') is-invalid
                                                  @enderror"
                                                name="date" placeholder="Title">
                                            <span class="text-danger text-uppercase ">{{ $errors->first('date') }}</span>
                                        </div>

                                        {{-- <div class="mb-3">
                                            <label for="Title" class="form-label">Raw Brand</label>
                                            <select class="form-select @error('brand') is-invalid @enderror" name="brand"
                                                id="brand" aria-label="Default select example">
                                                <option value="">Select Brand</option>
                                                @foreach ($rawBrands as $rawBrand)
                                                    <option value="{{ $rawBrand->id }}"
                                                        {{ old('title') == $rawBrand->title ? 'selected' : '' }}>
                                                        {{ $rawBrand->title }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('brand') }}</span>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="Title" class="form-label">Product</label>
                                            <select class="form-select @error('Product') is-invalid @enderror" name="Product"
                                                id="Product" aria-label="Default select example">
                                                <option value="">Select Product</option>
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->prod }}"
                                                        {{ old('Product') == $product->prod ? 'selected' : '' }}>
                                                        {{ $product->prod }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('Product') }}</span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Quantity In</label>
                                            <input type="number" value="{{ old('qty_in') }}"
                                                class="form-control @error('qty_in') is-invalid
                        @enderror"
                                                name="qty_in" placeholder="Quantity In">
                                            <span class="text-danger text-uppercase ">{{ $errors->first('qty_in') }}</span>
                                        </div>


                                        <div class="mb-3">
                                            <label for="Department" class="form-label">Description</label>
                                            <input type="text" value="{{ old('description') }}"
                                                class="form-control @error('description') is-invalid
                         @enderror"
                                                name="description" id="inputProductTitle" placeholder="Description">
                                            <span
                                                class="text-danger text-uppercase ">{{ $errors->first('description') }}</span>
                                        </div>


                                        <div class="col-md-12 pt-3">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                            </div>

                                        </div>

                                        {{-- <div class="mb-3">
                         <label for="inputProductDescription" class="form-label">Product Images</label>
                         <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/,.doc,audio/,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                       </div> --}}
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!--end page wrapper -->
@endsection
