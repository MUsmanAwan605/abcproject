@extends('quality.qa_dashboard')
@section('qa')
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
								<li class="breadcrumb-item active" aria-current="page">Tube Suction KOKA</li>
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
			  <form method="post" action="/qa/inline/tSuctionKOKA">
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
								<label for="date" class="form-label">Select Date</label>
								<input type="date" value="{{old('date')}}" class="form-control @error('date') is-invalid @enderror" id="date" name="date" placeholder="Enter Field Input">
								<span class="text-danger">{{ $errors->first('date') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="extr_btm_lyr">Select Extrusion(Bottom Layer) Result</label>
								<select class="form-select @error('extr_btm_lyr') is-invalid @enderror" name="extr_btm_lyr" id="extr_btm_lyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('extr_btm_lyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('extr_btm_lyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('extr_btm_lyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="extr_top_lyr">Select Extrusion(Top Layer) Result</label>
								<select class="form-select @error('extr_top_lyr') is-invalid @enderror" name="extr_top_lyr" id="extr_top_lyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('extr_top_lyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('extr_top_lyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('extr_top_lyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="blnk_ctng_tlyr">Select Blanck Cutting(Top Layer) Result</label>
								<select class="form-select @error('blnk_ctng_tlyr') is-invalid @enderror" name="blnk_ctng_tlyr" id="blnk_ctng_tlyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('blnk_ctng_tlyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('blnk_ctng_tlyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('blnk_ctng_tlyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="vulcan_tlyr">Select Vulcanization(Top Layer) Result</label>
								<select class="form-select @error('vulcan_tlyr') is-invalid @enderror" name="vulcan_tlyr" id="vulcan_tlyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('vulcan_tlyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('vulcan_tlyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('vulcan_tlyr') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="washing">Select Washing Result</label>
								<select class="form-select @error('washing') is-invalid @enderror" name="washing" id="washing">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('washing') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('washing') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('washing') }}</span>
							  </div>
							  <div class="mb-3">
								<label class="form-label" for="fnl_ctng_tlyr">Select Final Cutting(Top Layer) Result</label>
								<select class="form-select @error('fnl_ctng_tlyr') is-invalid @enderror" name="fnl_ctng_tlyr" id="fnl_ctng_tlyr">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('fnl_ctng_tlyr') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('fnl_ctng_tlyr') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('fnl_ctng_tlyr') }}</span>
							  </div>

							</div>
						</div>
							  <div class="col-4">
								<div class="border border-3 p-4 rounded">

							  <div class="mb-3">
								<label class="form-label" for="date_code_prnt">Select Date Code Printing Result</label>
								<select class="form-select @error('date_code_prnt') is-invalid @enderror" name="date_code_prnt" id="date_code_prnt">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('date_code_prnt') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('date_code_prnt') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('date_code_prnt') }}</span>
							  </div>

							  <div class="mb-3">
								<label class="form-label" for="prod">Select  Production Result</label>
								<select class="form-select @error('prod') is-invalid @enderror" name="prod" id="prod">
									<option value="none">--Select Inspection Result--</option>
									<option value="Approved" {{old('prod') == 'Approved' ? 'selected' : NULL}}>Approved</option>
									<option value="Rejected" {{old('prod') == 'Rejected' ? 'selected' : NULL}}>Rejected</option>
								</select>
								<span class="text-danger">{{ $errors->first('prod') }}</span>
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
