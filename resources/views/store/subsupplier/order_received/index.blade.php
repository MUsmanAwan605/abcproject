@extends('store.store_dashboard')
@section('store')
    <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">SubSupplier</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Order Received</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
                <div class="card-body">
                    @if(session('success'))
                    <div id="success-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>

                    <script>
                        setTimeout(function() {
                            document.getElementById('success-message').style.display = 'none';
                        }, 5000); // Hide after 5 seconds
                    </script>
                @endif
				<div class="card">
                    <div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
                            <form method="GET"  action="{{ route('suborder.search') }}">
                                <div class="d-lg-flex">
                                    <div class="col-8">
                                        <input type="search" name="search" class="form-control" placeholder="Search By S.no" >
                                   </div>
                                   <div class="ms-2">
                                         <button type="submit" class="btn btn-success">Search</button>
                                   </div>
                                   <div class="ms-2">
                                         <a href="/store/subsupplierrr/order">
                                            <button type="button" class="btn btn-danger">Reset</button>
                                         </a>
                                   </div>
                               </div>
                                </form>
						  <div class="ms-auto"><a href="{{route('suborder.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>New Order</a></div>
						</div>
                        @if($orders->count()>0)
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>
											<div>
												<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
											</div>
										</th>
										<th>Serial no:</th>
										<th>Purchase Order no:</th>
										<th>Date</th>
										<th>Description</th>
										<th>Delivery Chalan</th>
                                        <th>Quantity-in</th>
                                        <th>Order by</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($orders as $subsupplier)
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
											</div>
										</td>
                                        <td style="vertical-align: middle">{{$subsupplier->s_no}}</td>
										<td style="vertical-align: middle">{{$subsupplier->po_no}}</td>
										<td style="vertical-align: middle">{{ date('d M Y', strtotime($subsupplier->date)) }}</td>
										<td style="vertical-align: middle">{{$subsupplier->dscp}}</td>
										<td style="vertical-align: middle">{{$subsupplier->d_c}}</td>
										<td style="vertical-align: middle">{{$subsupplier->qty_in}}</td>
										<td style="vertical-align: middle">{{$subsupplier->supplier}}</td>
										<td>
											<div class="d-flex order-actions">
												<a href="{{route('suborder.edit',$subsupplier->id)}}" class=""><i class='bx bxs-edit'></i></a>
												<form method="post" action="{{route('suborder.destroy',$subsupplier->id)}}">
													@csrf
												{{method_field('DELETE')}}
												<button type="submit" class="ms-2" style="padding: 9px 10px;outline:none;border:none;border-radius:5px;">
												<i class='bx bxs-trash'></i>
											</button>
											</form>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
                        <div class="mt-5">
                            {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger">No record found</div>
                    @endif
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
@endsection
