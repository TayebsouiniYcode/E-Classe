<?php include "./components/header.php"; ?>
<div class="container-fluid">
    <div class="row">
        <?php include "./components/sidenav.php"; ?>
        <!--content -->
        <div class="col-lg-10 col-md-8 col-sm-6 col-9">
            <div class="d-flex justify-content-between mt-3">
                <div class="">
                    <a href="#"><i class="far fa-arrow-alt-circle-left text-muted"></i></a>
                </div>
                <div class="d-flex justify-content-between align-items-center gap-3">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div>
                        <a href="#"><i class="far fa-bell text-muted"></i></a>
                    </div>
                </div>
            </div>
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
                        <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                        <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                        <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                        <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                        <tr>
                        <td>Karthi</td>
                        <td>First</td>
                        <td>00012223</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<?php include "./components/footer.php"; ?>