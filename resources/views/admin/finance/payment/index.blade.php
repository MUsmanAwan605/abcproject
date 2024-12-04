@extends('admin.admin_dashboard')
@section('admin')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">payment</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Status</li>
                    </ol>
                </nav>
            </div>
        </div>
            <!--Message  Start-->
          @if (session('success'))
          <div class="alert alert-success" id="alertMessage">
              {{ session('success') }}
          </div>
          <script>
              setTimeout(function() {
                  document.getElementById('alertMessage').style.display = 'none';
              }, 3000);
          </script>
      @endif
      <!--Message  End-->
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <form method="GET"  action="">
                        <div class="d-lg-flex">
                            <div class="col-8">
                                <input type="search" name="search" class="form-control" placeholder="Search By Title" >
                           </div>
                           <div class="ms-2">
                                 <button type="submit" class="btn btn-success">Search</button>
                           </div>
                           <div class="ms-2">
                                 <a href="/finance/purchaseorders">
                                    <button type="button" class="btn btn-danger">Reset</button>
                                 </a>
                           </div>
                       </div>
                        </form>
                <div class="ms-auto"><a href="/admin/finance/payment/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add payment</a></div>
                </div>
                @if($payments->count()>0)
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr#</th>
                                <th>payment</th>
                                <th>Date</th>
                                <th>Department</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)

                            <tr>
                                <td style="vertical-align: middle">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14">{{$payment->id}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <a href="" data-bs-toggle="modal"  data-bs-target="#payment{{$payment->id}}">{{$payment->payment}}</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="payment{{$payment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalLabel">payment</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="mb-12" class="modal-body">
                                                <table class="table mb-12 text-center table-bordered px-4">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Sr#</th>
                                                            <th>payment</th>
                                                            <th>Date</th>
                                                            <th>Department</th>
                                                            <th>Description</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="vertical-align: middle"> <p>{{$payment->id}}</p> </td>
                                                            <td style="vertical-align: middle"> <p>{{$payment->payment}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payment->date}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payment->depart}}</p></td>
                                                            <td style="vertical-align: middle"> <p>{{$payment->descp}}</p></td>
                                                            {{-- <td style="vertical-align: middle">
                                                                @if($payment->fin_img == 'Image will be here')
                                                                Image will be here
                                                                @else
                                                                <img src="/uploads/{{$payment->fin_img}}" width="70" height="70" alt="">
                                                                @endif
                                                            </td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer" style="border: none">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save payment</button> --}}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">{{$payment->date}}</td>
                                <td style="vertical-align: middle">{{$payment->depart}}</td>
                                <td style="vertical-align: middle">{{$payment->descp}}</td>
                                {{-- <td style="vertical-align: middle">
                                    @if($payment->fin_img == 'Image will be here')
                                    Image will be here
                                    @else
                                    <img src="../uploads/{{$payment->fin_img}}" width="70" height="70" alt="">
                                    @endif
                                </td>                                   --}}
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="{{ route('admin.finance.payment.edit',$payment->id)}}" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="{{ url('admin/finance/payment/' . $payment->id) }}">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')"
                                            class="ms-2" style="padding: 6px 10px;outline:none;border:none;border-radius:5px;" >
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
            </div>
        </div>
        @else
        <div class="alert alert-danger">No records found</div>
        @endif
    </div>
</div>
@endsection