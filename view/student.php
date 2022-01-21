<?php include "./components/header.php"; ?>
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
                      <a href="#" class="btn btn-primary text-uppercase">
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
                      <?php
                        $students = array(
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Tayeb SOUINI',
                            'phone' => '0644444444',
                            'enrollNumber' => '242312312543223',
                            'dateOfAdmission' => '14-Jan, 2022'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Sabir LKHALOUFI',
                            'phone' => '0655555555',
                            'enrollNumber' => '324352434',
                            'dateOfAdmission' => '01-Sep, 1028'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Aymen DARJI',
                            'phone' => '0642324356',
                            'enrollNumber' => '54432326',
                            'dateOfAdmission' => '15-Oct, 2020'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Khalid HAGANE',
                            'phone' => '0612228745',
                            'enrollNumber' => '424643223',
                            'dateOfAdmission' => '02-Mar, 2021'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Mahdi NAINIA',
                            'phone' => '0698233345',
                            'enrollNumber' => '23465243565',
                            'dateOfAdmission' => '31-Dec, 2017'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Yahya KOUZBOUR',
                            'phone' => '0623554321',
                            'enrollNumber' => '234564336',
                            'dateOfAdmission' => '14-Jan, 2022'
                          ),
                          array(
                            'image' => array(
                                        'title' => 'profile',
                                        'extension' => 'png',
                            ),
                            'name' => 'Wasim LEHLALI',
                            'phone' => '0670998321',
                            'enrollNumber' => '234654356',
                            'dateOfAdmission' => '14-Jan, 2022'
                          ),
                        );

                        $numberOfStudents = count($students);

                        $icons = <<<ICON
                              <td class="text-primary align-middle text-center">
                                <a href="#"><i class="fas fa-pen pe-3"></i></a>
                                <a href="#"><i class="fas fa-trash"></i></a>
                              </td>
                              ICON;

                        for ($i = 0 ; $i < $numberOfStudents ; $i++) {
                          echo "<tr class=\"mt-2\">";                            
                          echo "
                                  <th scope=\"row\">
                                    <img 
                                      src=\"../assets/img/{$students[$i]['image']['title']}.{$students[$i]['image']['extension']}\" 
                                      alt=\"avatar img\" 
                                      width=\"65\" height=\"55\">
                                  </th>
                                ";
                          foreach ($students[$i] as $key => $val){
                            if($key != 'image'){
                              echo "
                                  <td class=\"align-middle\">
                                    {$val}
                                  </td>  
                            ";
                            }
                          }
                          echo $icons;
                          echo "</tr>";
                        }
                      ?>
                  </table>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/footer.php"; ?>