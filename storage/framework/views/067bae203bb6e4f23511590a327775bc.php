<?php $__env->startSection('finance'); ?>

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Finance</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Receipt</li>
                    </ol>
                </nav>
            </div>
            
        </div>
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
                <div class="ms-auto"><a href="/finance/receipt/create" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add Receipt</a></div>
                </div>
                <?php if($receipts->count()>0): ?>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Sr#</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $receipts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td style="vertical-align: middle">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 font-14"><?php echo e($receipt->id); ?></h6>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle">
                                    <a href="" data-bs-toggle="modal"  data-bs-target="#receipt<?php echo e($receipt->id); ?>"><?php echo e($receipt->descp); ?></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="receipt<?php echo e($receipt->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalLabel">receipt</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="mb-12" class="modal-body">
                                                <table class="table mb-12 text-center table-bordered px-4">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Sr#</th>
                                                            <th>Description</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Date</th>
                                                            <th>Total</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->id); ?></p> </td>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->descp); ?></p></td>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->qty); ?></p></td>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->price); ?></p></td>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->date); ?></p></td>
                                                            <td style="vertical-align: middle"> <p><?php echo e($receipt->total); ?></p></td>

                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer" style="border: none">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td style="vertical-align: middle"><?php echo e(\Carbon\Carbon::parse($receipt->date)->format('d M Y')); ?></td>
                                <td style="vertical-align: middle"><?php echo e($receipt->qty); ?></td>
                                <td style="vertical-align: middle"><?php echo e($receipt->price); ?></td>
                                <td style="vertical-align: middle"><?php echo e($receipt->total); ?></td>

                                
                                <td style="vertical-align: middle">
                                    <div class="d-flex order-actions">
                                        <a href="<?php echo e(route('finance.receipt.edit',$receipt->id)); ?>" class=""><i class='bx bxs-edit'></i></a>
                                        <form method="post" action="<?php echo e(url('/finance/receipt/' . $receipt->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo e(method_field('DELETE')); ?>

                                            <button type="submit" onclick="return confirm('Are you sure you want to delete?')"
                                            class="ms-2" style="padding: 6px 10px;outline:none;border:none;border-radius:5px;" >
                                                <i class='bx bxs-trash'></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="alert alert-danger">No records found</div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('finance.finance_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/finance/receipt/index.blade.php ENDPATH**/ ?>