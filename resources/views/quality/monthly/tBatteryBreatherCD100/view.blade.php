@extends('quality.qa_dashboard')
@section('qa')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="/dashboard"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Tube Battery Breather CD-100</li>
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

				<div class="card">
					<div class="card-body">
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
                            <div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Inline Results--</option>
									<option value="{{route('inline.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('inline.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('inline.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('inline.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('inline.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('inline.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('inline.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('inline.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('inline.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('inline.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('inline.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('inline.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('inline.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('inline.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('inline.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('inline.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('inline.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('inline.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('inline.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('inline.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('inline.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('inline.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('inline.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('inline.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('inline.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('inline.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('inline.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('inline.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('inline.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('inline.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('inline.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Final Inspection Results--</option>
									<option value="{{route('final.tfuelCG-125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('final.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('final.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('final.tubeCompFuelDeluxe.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('final.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('final.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('final.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('final.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('final.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('final.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('final.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('final.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('final.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('final.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('final.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('final.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('final.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('final.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('final.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('final.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('final.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('final.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('final.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('final.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('final.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('final.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('final.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('final.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('final.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('final.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('final.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Monthly Results--</option>
									<option value="{{route('monthly.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('monthly.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('monthly.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('monthly.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('monthly.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('monthly.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('monthly.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('monthly.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('monthly.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('monthly.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('monthly.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('monthly.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('monthly.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('monthly.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('monthly.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('monthly.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('monthly.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('monthly.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('monthly.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('monthly.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('monthly.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('monthly.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('monthly.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('monthly.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('monthly.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('monthly.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('monthly.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
						</div>
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="col-6">

                                <form method="get" action="{{route('search.tBtryBreatherCD100')}}">
                                    <div class="d-lg-flex">
                                        <div class="col-8">
                                            <input type="search" name="search" class="form-control" placeholder="Search By Month Name or Year Number" value="{{$data}}">

                                        </div>
                                        <div class="ms-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                        <div class="ms-2">
                                            <a href="{{route('monthly.tBtryBreatherCD100.index')}}">
                                            <button type="button" class="btn btn-danger">Reset</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
						  <div class="ms-auto"><a href="/qa/monthly/tBtryBreatherCD100/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Inspection Record</a></div>

                        </div>
                          <div class="table-responsive">
							<table class="table mb-0 ">
								<thead class="table-light">
									<tr>
										<th class="text-center">Sr#</th>
                                        <th class="text-center">Month</th>
                                        <th class="text-center">Year</th>
										<th class="text-center">Operation Name</th>
										<th class="text-center">In-Process Rejection</th>
										<th class="text-center">Final Inspection Rejection</th>
										<th class="text-center">Produced Quantity</th>
										<th class="text-center">Inspection Quantity</th>
                                        <th class="text-center">Total Rejections</th>

										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
                                   @foreach ($records as $record)
                                   <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-0 font-14">{{$record->sr_no}}</h6>
                                            </div>
                                        </div>
                                    </td>
									<td class="text-center">{{$record->month}}</td>
									<td class="text-center">{{$record->year}}</td>
                                    <td class="text-center">

                                        @if ($record->opr_name == 'extr_sngl_lyr')

                                        Extrusion(Single Layer)

                                        @elseif ($record->opr_name == 'semi_vulcan')

                                        Semi Vulcanization

                                        @elseif ($record->opr_name == 'fnl_ctng_t')

                                        Final Cutting Tube

                                        @elseif ($record->opr_name == 'cmplt_vulcan')

                                        Complete Vulcanization

                                        @elseif ($record->opr_name == 'wshng_t')

                                        Washing Tube

                                        @elseif ($record->opr_name == 'punching')

                                        Punching



                                        @elseif ($record->opr_name == 'trmng_grmt')

                                        Triming Grommet

                                        @elseif ($record->opr_name == 'mldng_grmt')

                                        Moulding Grommet

                                        @elseif ($record->opr_name == 'asmbl_grmt')

                                         Assembly Grommet





                                        @endif

                                    </td>
                                    <td class="text-center">{{$record->inprcs_rjct}} Rejected</td>
                                    <td class="text-center">{{$record->fnl_rjct}} Rejected</td>
                                    <td class="text-center">{{$record->prod_qty}}</td>
                                    <td class="text-center">{{$record->inspct_qty}}</td>
                                    <td class="text-center">{{$record->inprcs_rjct + $record->fnl_rjct}} Rejected</td>
                                    <td class="text-center">
                                        <div class="d-flex order-actions">
                                            <a href="/qa/monthly/tBtryBreatherCD100/{{$record->sr_no}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/qa/monthly/tBtryBreatherCD100/{{$record->sr_no}}">
												@csrf
												{{method_field('DELETE')}}
												<button type="submit" style="outline:none;border:none;background:transparent">
                                            <a href="/qa/monthly/tBtryBreatherCD100/{{$record->sr_no}}/destroy" class="ms-3"><i class='bx bxs-trash'></i></a>
												</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                   @endforeach


								</tbody>
							</table>

						</div>
                        <div class="mt-3">

                            {!! $records->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>

					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
@endsection
