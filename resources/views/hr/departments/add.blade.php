@extends('hr.hr_dashboard')
@section('humanresource') 
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">HR</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Departments</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
       <form name="" id="" method="post" action="{{ route('hr.departments.store') }}">
        @csrf
        <div class="card">
          <div class="card-body p-4">
              <h5 class="card-title">Add New Departments</h5>
              <hr/>
               <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="border border-3 p-4 rounded">

                       <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{  old('name') }}" class="form-control @error('name') is-invalid
                        @enderror" name="name" placeholder="Department title">
                         <span class="text-danger text-uppercase ">{{ $errors->first('name') }}</span>
                       </div>
                       <div class="mb-3">
                         <label for="Department" class="form-label">Department Descriotion</label>
                         <input type="text" value="{{ old('description') }}"  class="form-control @error('description') is-invalid
                         @enderror" name="description" id="inputProductTitle" placeholder="Enter Department Description">
                         <span class="text-danger text-uppercase ">{{ $errors->first('description') }}</span>
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
