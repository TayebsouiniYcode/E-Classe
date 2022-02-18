<?php
session_start();

if(isset($_SESSION['Role'])) {
    if($_SESSION['Role'] == 'Student') {
        header('location: ../View/permissionErr.php');
    }
} else {
    header('location: ../index.php');
}

include_once "./components/header.php";
include_once "../src/controllers/config.php";
$students = getStudents();
$numberOfStudents =  numberOfElement('students');
?>
<div class="container-fluid">
    <div class="row">
        <?php include "./components/sidenav.php"; ?>
        <!-- content -->
        <div class="col-9 col-sm-6 col-md-8 col-lg-10 ">
            <?php include './components/topbar.php' ?>
            <!-- Content -->
            <div class="row mt-5">
                <div class="title col-sm-12 col-md-6 col-lg-4">
                    <h2>Students List</h2>
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-end col-sm-12 col-md-6 col-lg-8">
                    <div class="d-none d-md-inline-block">
                        <i class="fas fa-sort text-primary"></i>
                    </div>
                    <div>
                        <?php require_once './student/add.php' ?>
                        <button type="button" class="btn btn-primary bg-blue" data-bs-toggle="modal" data-bs-target="#addNewStudent">
                            add new student
                        </button>
                    </div>
                </div>
                <hr>
            </div>
            <div class="px-3 table-responsive">
              <table class="table">
                <thead>
                  <tr class="">
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Enroll number</th>
                    <th scope="col">Date of admission</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php for($i = 0 ; $i < $numberOfStudents; $i++) : ?>
                    <tr class="mt-2">
                        <th scope="row">
                            <img src="../assets/img/profile.png" alt="avatar img" width="65" height="55">
                        </th>
                        <td class="align-middle">
                            <?php print($students[$i]['Firstname'] . " " . $students[$i]['Lastname']); ?>
                        </td>
                        <td class="align-middle">
                            <?php print($students[$i]['Email']); ?>
                        </td>
                        <td class="align-middle">
                            <?php print($students[$i]['Phone']); ?>
                        </td>
                        <td class="align-middle">
                            <?php print($students[$i]['EnrollNumber']); ?>
                        </td>
                        <td class="align-middle">
                            <?php print($students[$i]['DateOfAdmission']); ?>
                        </td>
                        <td class="text-primary align-middle text-center">
                            <a href="./student/edit.php?id=<?php print($students[$i]['Id_Student']);?>">
                                <i class="fas fa-pen pe-3"></i>
                            </a>
                            <a href="../src/controllers/student/delete.php?id=<?php print($students[$i]['Id_Student'])?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endfor; ?>
              </table>
            </div>
        </div>
    </div>
</div>

<?php require  __DIR__ . "/components/footer.php"; ?>