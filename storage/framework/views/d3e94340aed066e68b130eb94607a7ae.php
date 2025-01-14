<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('backend/assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Finance</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="<?php echo e(route('finance.dashboard.index')); ?>" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Purchase Order</div>
                </a>
                <ul>

                    <li> <a href="<?php echo e(route('finance.orders.index')); ?>"><i class='bx bx-radio-circle'></i>Purchase Order</a>
                    </li>
                    <li> <a href="<?php echo e(route('purchase-orders.confirmed')); ?>"><i class='bx bx-radio-circle'></i>Order Confirmed</a>
                    </li>


                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Hr-Payroll</div>
                </a>
                <ul>

                    <li> <a href="<?php echo e(route('finance.employees.index')); ?>"><i class='bx bx-radio-circle'></i>Employees Detail</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.salary.index')); ?>"><i class='bx bx-radio-circle'></i>Monthly Salary</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.loan.index')); ?>"><i class='bx bx-radio-circle'></i>Loan</a>
                    </li>



                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Stationary Order</div>
                </a>
                <ul>

                    <li> <a href="<?php echo e(route('finance.order.index')); ?>"><i class='bx bx-radio-circle'></i>View Order</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.order.create')); ?>"><i class='bx bx-radio-circle'></i>Add Order</a>
                    </li>



                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('finance.fund.index')); ?>" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Funds</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.fund.index')); ?>"><i class='bx bx-radio-circle'></i>View Funds</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.fund.add')); ?>"><i class='bx bx-radio-circle'></i>Add New</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;<?php echo e(route('finance.expense.index')); ?>" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Expense</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.expense.index')); ?>"><i class='bx bx-radio-circle'></i>View Expense</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.expense.add')); ?>"><i class='bx bx-radio-circle'></i>Add Expense</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Receipt</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.receipt.index')); ?>"><i class='bx bx-radio-circle'></i>View Receipt</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.receipt.add')); ?>"><i class='bx bx-radio-circle'></i>Add Receipt</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Payments</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.payment.index')); ?>"><i class='bx bx-radio-circle'></i>View Payment</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.payment.add')); ?>"><i class='bx bx-radio-circle'></i>Add Payment</a>
                    </li>
                </ul>
            </li>

            

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Sale Invoice</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.sale_invoice.index')); ?>"><i class='bx bx-radio-circle'></i>View Sale Invoice</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.sale_invoice.add')); ?>"><i class='bx bx-radio-circle'></i>Add Sale Invoice</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Purchase Invoice</div>
                </a>
                <ul>
                    <li> <a href="<?php echo e(route('finance.purchase_invoice.index')); ?>"><i class='bx bx-radio-circle'></i>View Purchase Invoice</a>
                    </li>
                    <li> <a href="<?php echo e(route('finance.purchase_invoice.add')); ?>"><i class='bx bx-radio-circle'></i>Add Purchase Invoice</a>
                    </li>
                </ul>
            </li>












    </ul>
    <!--end navigation-->
</div>
<?php /**PATH C:\xampp\htdocs\onlinefinalproject\resources\views/finance/body/sidebar.blade.php ENDPATH**/ ?>