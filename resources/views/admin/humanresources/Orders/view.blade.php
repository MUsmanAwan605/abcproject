@extends('admin.admin_dashboard')
@section('admin')




<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Orders</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
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
            </div> --}}
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="{{ route('admin.search.order') }}">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By  Name" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/admin/humanresources/orders">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                </div>
                @if ($records->count() > 0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>id</th>
                                <th>Order number</th>
                                <th>Title</th>
                                <th>Order Quantity</th>
                                <th>Order Row</th>
                                <th>Order Amount</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($records as $record)


                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">{{$order->id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$record->ordrnum}}</td>
                                <td>{{$record->title}}</td>


                                <td>{{$record->qty}}</td>
                                <td>{{$record->raw}}</td>
                                <td>{{$record->amount}}</td>
                                <td>{{$record->department}}</td>
                                @if ($record->status=='process')
                                <td><div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>Process</div></td>
                                @else
                                <td><div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class='bx bxs-circle me-1'></i>confirmed</div></td>

                                @endif
                                <td>{{$record->date}}</td>
                                 <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('admin.humanresources.orders.edit',['id'=>$record->id]) }}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="POST" action="{{ route('admin.humanresources.orders.edit',['id'=>$record->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')" style="outline:none;border:none;background:transparent">
                                                <a href="{{ route('admin.humanresources.orders.destroy',['id'=>$record->id]) }}" class="ms-3"><i class='bx bxs-trash'></i></a>
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
                    {!! $orders->withquerystring()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
            @else
            <div class="alert alert-danger">No record found</div>
            @endif
        </div>


    </div>
</div>
<!--end page wrapper -->

@endsection
