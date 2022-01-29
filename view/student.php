<?php include "./components/header.php"; ?>

<?php
    //fetch data from json
    $json = file_get_contents('../db/student.json');
    $data = json_decode($json, true);
?>
<div class="container-fluid">
    <div class="row">
      <?php include "./components/sidenav.php"; ?>
        <!-- content -->
        <div class="col-lg-10 col-md-8 col-sm-6 col-9">
            <?php include './components/topbar.php' ?>
            <!-- Content -->
            <div class="row mt-5 flex-row">
              <div class="title col-lg-4 col-md-6 col-sm-12">
                <h2>Students List</h2>
              </div>
              <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
                <div style="font-size: 1.5rem;" class="d-none d-md-inline-block">
                  <i class="fas fa-sort text-primary"></i>
                </div>
                <div>
                  <a href="student/add.php" class="btn btn-primary text-uppercase">
                    <i class="bi bi-plus-lg"></i>
                    <span class="d-none d-sm-inline-block">
                      add new student
                    </span>
                  </a>
                </div>
              </div>
              <hr>
            </div>
            <div class="row px-3 table-responsive">
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
                <tbody class="flex-column gap-2">
                  <?php  foreach ($data as $key => $student) :
                        echo "<tr class=\"mt-2\">";
                        echo "
                              <th scope=\"row\">
                                <img 
                                  src=\"../assets/img/profile.png \"
                                  alt=\"avatar img\" 
                                  width=\"65\" height=\"55\">
                              </th>
                            ";
                            foreach ($student as $keyStudent => $value) :
                                if($keyStudent != 'image') :
                                  echo "
                                      <td class=\"align-middle\">
                                        {$value}
                                      </td> ";
                                endif;
                            endforeach;
                            echo    "<td class=\"text-primary align-middle text-center\">
                                        <a href=\"./student/edit.php?index={$key}\"><i class=\"fas fa-pen pe-3\"></i></a>
                                    <a href=\"./student/delete.php?index={$key}\"><i class=\"fas fa-trash\"></i></a>
                                  </td>";
                            echo "</tr>";
                        endforeach;
                  ?>
              </table>
            </div>
        </div>
    </div>
</div>

<?php include "./components/footer.php"; ?>