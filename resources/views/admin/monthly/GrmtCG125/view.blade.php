@extends('admin.admin_dashboard')
@section('admin')
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
								<li class="breadcrumb-item active" aria-current="page">Grommet CG-125</li>
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
									<option value="{{route('admininline.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('admininline.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('admininline.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('admininline.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('admininline.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('admininline.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('admininline.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('admininline.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('admininline.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('admininline.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('admininline.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('admininline.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('admininline.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('admininline.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('admininline.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('admininline.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('admininline.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('admininline.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('admininline.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('admininline.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('admininline.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('admininline.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('admininline.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('admininline.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('admininline.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('admininline.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('admininline.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('admininline.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('admininline.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('admininline.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('admininline.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Final Inspection Results--</option>
									<option value="{{route('adminfinal.tfuelCG-125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('adminfinal.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('adminfinal.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('adminfinal.tubeCompFuelDeluxe.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('adminfinal.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('adminfinal.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('adminfinal.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('adminfinal.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('adminfinal.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('adminfinal.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('adminfinal.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('adminfinal.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('adminfinal.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('adminfinal.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('adminfinal.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('adminfinal.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('adminfinal.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('adminfinal.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('adminfinal.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('adminfinal.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('adminfinal.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('adminfinal.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('adminfinal.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('adminfinal.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('adminfinal.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('adminfinal.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
							<div>
								<select class=" form-select" onchange="location = this.value;" name="view_product" id="view_product">
									<option value="">--Monthly Results--</option>
									<option value="{{route('adminmonthly.tfuelCG125.index')}}">Tube Fuel CG-125 Results </option>
									<option value="{{route('adminmonthly.tfuelCD-70.index')}}">Tube Fuel CD-70 Results </option>
                                       <option value="{{route('adminmonthly.tfuelCD-100.index')}}">View Tube Fuel CD-100 Results</option>
                                       <option value="{{route('adminmonthly.tCompFuelDLX.index')}}">View Tube Comp Fuel Deluxe Results</option>
                                       <option value="{{route('adminmonthly.tASV-CG125.index')}}">Tube ASV CG-125 Results</option>
                                       <option value="{{route('adminmonthly.tbBreather-CD70.index')}}">Tube B Breather CD-70 Results </option>
                                       <option value="{{route('adminmonthly.tbBreather-CG125.index')}}">Tube B Breather CG-125 Results</option>
                                       <option value="{{route('adminmonthly.taBreather-CG125.index')}}">Tube A Breather CG-125 Results</option>
                                       <option value="{{route('adminmonthly.tSuctionCG125.index')}}">Tube Suction CG-125 Results</option>
                                       <option value="{{route('adminmonthly.t8X150CG125.index')}}">Tube 8 X 150 CG-125 Results</option>
                                       <option value="{{route('adminmonthly.tBreatherPridor.index')}}">Tube Breather Pridor Results</option>
                                       <option value="{{route('adminmonthly.tBreatherDeluxe.index')}}">Tube Breather Deluxe Results</option>
                                       <option value="{{route('adminmonthly.t4X440KOKA.index')}}">Tube 4 X 440 KOKA Results</option>
                                       <option value="{{route('adminmonthly.tBreatherKOKA.index')}}">Tube Breather KOKA Results</option>
                                       <option value="{{route('adminmonthly.tSuctionKOKA.index')}}">Tube Suction KOKA Results</option>
                                       <option value="{{route('adminmonthly.CshnFrntFuelTnkDLX.index')}}">Cushion Front Fuel Tank Deluxe Results</option>
                                       <option value="{{route('adminmonthly.RbrMflrMntDLX.index')}}">Rubber Muffler Mount Deluxe Results</option>
                                       <option value="{{route('adminmonthly.GrmtSideCvrDLX.index')}}">Grommet Side Cover Deluxe Results</option>
                                       <option value="{{route('adminmonthly.GrmtARearCvrCD100.index')}}">Grommet A Rear Cover CD-100 Results</option>
                                       <option value="{{route('adminmonthly.RbrHndlCshnCD100.index')}}">Rubber Handle Cushion CD-100 Results</option>
                                       <option value="{{route('adminmonthly.UndrRbrHndlCD100.index')}}">Under Rubber Handle CD-100 Results</option>
                                       <option value="{{route('adminmonthly.PckngRbrCD100.index')}}">Packing Rubber CD-100 Results</option>
                                       <option value="{{route('adminmonthly.GrmtCD70.index')}}">Grommet CD-70 Results</option>
                                       <option value="{{route('adminmonthly.GrmtCG125.index')}}">Grommet CG-125 Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherDLX.index')}}">Tube Battery Breather Deluxe Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherCD70.index')}}">Tube Battery Breather CD-70 Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherCG125.index')}}">Tube Battery Breather CG-125 Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherCD100.index')}}">Tube Battery Breather CD-100 Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherKSW.index')}}">Tube Battery Breather KSW Results</option>
                                       <option value="{{route('adminmonthly.tBtryBreatherKOKA.index')}}">Tube Battery Breather KOKA Results</option>
                                       <option value="{{route('adminmonthly.tCompfuelKOKA.index')}}">Tube Comp Fuel KOKA Results</option>
								</select>
							</div>
						</div>
                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                            <div class="col-6">

                                <form method="get" action="{{route('adminsearch.GrmtCG125')}}">
                                    <div class="d-lg-flex">
                                        <div class="col-8">
                                            <input type="search" name="search" class="form-control" placeholder="Search By Month Name or Year Number" value="{{$data}}">

                                        </div>
                                        <div class="ms-2">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                        <div class="ms-2">
                                            <a href="{{route('adminmonthly.GrmtCG125.index')}}">
                                            <button type="button" class="btn btn-danger">Reset</button>
                                            </a>
                                        </div>
                                    </div>

                                </form>

                            </div>
						  <div class="ms-auto"><a href="/admin/monthly/GrmtCG125/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Inspection Record</a></div>

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

                                        @if ($record->opr_name == 'moulding')

                                        Moulding

                                        @elseif ($record->opr_name == 'triming')

                                        Triming



                                        @endif

                                    </td>
                                    <td class="text-center">{{$record->inprcs_rjct}} Rejected</td>
                                    <td class="text-center">{{$record->fnl_rjct}} Rejected</td>
                                    <td class="text-center">{{$record->prod_qty}}</td>
                                    <td class="text-center">{{$record->inspct_qty}}</td>
                                    <td class="text-center">{{$record->inprcs_rjct + $record->fnl_rjct}} Rejected</td>
                                    <td class="text-center">
                                        <div class="d-flex order-actions">
                                            <a href="/admin/monthly/GrmtCG125/{{$record->sr_no}}/edit" class=""><i class='bx bxs-edit'></i></a>
											<form method="post" action="/admin/monthly/GrmtCG125/{{$record->sr_no}}">
												@csrf
												{{method_field('DELETE')}}
												<button type="submit" style="outline:none;border:none;background:transparent">
                                            <a href="/admin/monthly/GrmtCG125/{{$record->sr_no}}/destroy" class="ms-3"><i class='bx bxs-trash'></i></a>
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
