<?php include "./components/header.php"; ?>

<?php
    //fetch data from json file
    $json = file_get_contents('../db/student.json');
    $data = json_decode($json, true);
?>
<div class="container-fluid">
    <div class="row">
        <?php include "./components/sidenav.php"; ?>
        <!-- content -->
        <div class="col-9 col-sm-6 col-md-8 col-lg-10 ">
            <?php include './components/topbar.php' ?>
            <!--
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div>
                    Etudiant ajouté avec succes
                </div>
            </div>
            -->
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
                        <!--
                        <a href="student/add.php" class="btn btn-primary text-uppercase">
                            <i class="bi bi-plus-lg"></i>
                            <span class="d-none d-sm-inline-block">
                                add new student
                            </span>
                        </a>
                        -->
                        <?php require_once './student/add.php' ?>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewStudent">
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
                    <?php  foreach ($data as $key => $student) : ?>
                    <tr class="mt-2">
                        <th scope="row">
                            <img
                              src="../assets/img/profile.png"
                              alt="avatar img"
                              width="65" height="55">
                        </th>
                        <?php foreach ($student as $keyStudent => $value) : ?>
                        <?php if($keyStudent != 'image') : ?>
                        <td class="align-middle">
                            <?php print($value); ?>
                        </td>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <td class="text-primary align-middle text-center">
                            <a href="./student/edit.php?index=<?php print($key);?>">
                                <i class="fas fa-pen pe-3"></i>
                            </a>
                            <a href="./student/delete.php?index=<?php print($key);?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php   endforeach; ?>
              </table>
            </div>
        </div>
    </div>
</div>

<?php include "./components/footer.php"; ?>