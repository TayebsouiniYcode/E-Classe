<?php include "./components/header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "./components/sidenav.php"; ?>
        <!--content -->
        <div class="col-lg-10 col-md-8 col-sm-6 col-9">
            <?php 
                include "./components/topbar.php"; 
            ?>
            <!-- Content -->
            <div class="row mt-5 flex-row ">
                <div class="title col-lg-4 col-md-6 col-sm-12">
                <h2>Payements list</h2>
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
                <div style="font-size: 1.5rem;">
                    <i class="fas fa-sort text-primary"></i>
                </div>
                </div>
                <hr>
            </div>
            <!-- list -->
            <div class="row mt-5 px-3 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Payment Shedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $payments = array(
                                array(
                                    'name' => 'Karthi',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 00012223,
                                    'AmountPaid' => 100000,
                                    'BalanceAmount' => 500000,
                                    'Date' => '05-Jan, 2022'
                                ),
                                array(
                                    'name' => 'Lghbar',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 2333234,
                                    'AmountPaid' => 43002,
                                    'BalanceAmount' => 90000,
                                    'Date' => '03-Jan, 2019'
                                ),
                                array(
                                    'name' => 'Lboukri',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 324534564,
                                    'AmountPaid' => 2000000,
                                    'BalanceAmount' => 343,
                                    'Date' => '25-Jan, 2018'
                                ),
                                array(
                                    'name' => 'Bettal',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 342543,
                                    'AmountPaid' => 9433430,
                                    'BalanceAmount' => 1000000,
                                    'Date' => '19-Sep, 2020'
                                ),
                                array(
                                    'name' => 'Lkhaloufi',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 324214,
                                    'AmountPaid' => 7800000,
                                    'BalanceAmount' => 1030000,
                                    'Date' => '11-Oct, 2021'
                                ),
                                array(
                                    'name' => 'Darji',
                                    'PaymentShedule' => 'First',
                                    'BillNumber' => 3323004,
                                    'AmountPaid' => 2434224343,
                                    'BalanceAmount' => 50010000,
                                    'Date' => '20-Jan, 2022'
                                )
                                
                            );

                            $numbersOfPayments = count($payments);
                            
                            for ($i = 0 ; $i < $numbersOfPayments ; $i++) {
                                echo '<tr>';
                                foreach($payments[$i] as $key => $val) {
                                    echo "<td>$val</td>";
                                }
                                echo '<td><a href="#"><i class="far fa-eye text-primary"></i></a></td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "./components/footer.php"; ?>