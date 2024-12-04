@extends('admin.admin_dashboard')
@section('admin')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Tube Breather Deluxe</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
			  <form method="post" action="/admin/monthly/tBreatherDeluxe">
				@csrf
				<div class="card">
				  <div class="card-body p-4">
					<div class="d-flex justify-content-between">
						<div>
							<h5 class="card-title">Add Inspection Record</h5>
						</div>

					</div>
					  <hr/>
                       <div class="form-body mt-4">
                        <div class="row">
						   <div class="col-lg-8">
                           <div class="border border-3 p-4 rounded">
							  <div class="mb-3">
								<label for="month" class="form-label">Select Month</label>
								<input type="month" value="{{old('month')}}" class="form-control @error('month') is-invalid @enderror" id="month" name="month" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('month') }}</span>
							  </div>
							  <div class="mb-3">
								<label for="opr_name" class="form-label">Operation Name</label>
								<select name="opr_name" id="opr_name" class="form-select @error('opr_name') is-invalid	@enderror">
									<option value="none">--Select Operation Name--</option>
									<option value="extr_snl_lyr" {{old('opr_name') == 'extr_snl_lyr' ? 'selected' : NULL }}>Extrusion(Single Layer)</option>
									<option value="blnk_ctng"{{old('opr_name') == 'blnk_ctng' ? 'selected' : NULL }}>Blanck Cutting</option>
									<option value="vulcan"{{old('opr_name') == 'vulcan' ? 'selected' : NULL }}>Vulcanization</option>
									<option value="washing"{{old('opr_name') == 'washing' ? 'selected' : NULL }}>Washing</option>
									<option value="fnl_ctng"{{old('opr_name') == 'fnl_ctng' ? 'selected' : NULL }}>Final Cutting</option>
									<option value="date_code_prnt"{{old('opr_name') == 'date_code_prnt' ? 'selected' : NULL }}>Date Code Printing</option>
									<option value="clip_asmbl"{{old('opr_name') == 'clip_asmbl' ? 'selected' : NULL }}>Clip Assembly</option>
								</select>
								<span class="text-danger">{{ $errors->first('opr_name') }}</span>
							  </div>
							  <div class="mb-3">
								<label for="inspct_qty" class="form-label">Inspect Quantity</label>
								<input type="inspct_qty" value="{{old('inspct_qty')}}" class="form-control @error('inspct_qty') is-invalid @enderror" id="inspct_qty" name="inspct_qty" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('inspct_qty') }}</span>
							  </div>
							  <div class="mb-3">
								<label for="prod_qty" class="form-label">Produced Quantity</label>
								<input type="prod_qty" value="{{old('prod_qty')}}" class="form-control @error('prod_qty') is-invalid @enderror" id="prod_qty" name="prod_qty" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('prod_qty') }}</span>
							  </div>
							  <div class="mb-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							  </div>
							</div>
						</div>

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