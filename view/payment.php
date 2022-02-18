<?php
include "./components/header.php";
include "../src/controllers/config.php";
session_start();

if(isset($_SESSION['Role'])) {
    if($_SESSION['Role'] == 'Student') {
        header('location: ../View/permissionErr.php');
    }
} else {
    header('location: ../index.php');
}

$paymentDetails = getPaymentDetails();
$numbersOfPayments = numberOfElement("payment_details");
?>
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
                            for ($i = 0 ; $i < $numbersOfPayments ; $i++) {
                                echo '<tr>';
                                //foreach($paymentDetails[$i] as $key => $val) {
                                echo '<td>' . $paymentDetails[$i]['Firstname'] . ' ' . $paymentDetails[$i]['Lastname'] . '</td>';
                                echo '<td>' . $paymentDetails[$i]['PaymentShedule'] . '</td>';
                                echo '<td>' . $paymentDetails[$i]['BillNumber'] . '</td>';
                                echo '<td>' . $paymentDetails[$i]['AmountPaid'] . '</td>';
                                echo '<td> Coming soon </td>';
                                echo '<td>' . $paymentDetails[$i]['Date'] . '</td>';
                                //}
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