<?php
    include "./components/header.php";
    include "./dashboard/data_card.php";
?>
<?php
$cards = array(
    array(
        'title' => 'Students',
        'number' => 24,
        'icon' => 'fas fa-graduation-cap',
        'bg-color' => '#F0F9FF',
        'color' => '#74C1ED'
    ),
    array(
        'title' => 'Course',
        'number' => 13,
        'icon' => 'far fa-bookmark',
        'bg-color' => '#FEF6FB',
        'color' => '#EE95C5'
    ),
    array(
        'title' => 'Payments',
        'number' => 556000,
        'icon' => 'fas fa-dollar-sign',
        'bg-color' => '#FEFBEC',
        'color' => '#00C1FE'
    ),
    array(
        'title' => 'Users',
        'number' => 3,
        'icon' => 'far fa-user',
        // 'bg-color' => 'linear-gradient(69.66deg, #00C1FE 19.39%, #FAFFC1 96.69%)',
        'bg-color' => '#00C1FE',
        'color' => '#fff'
    )
);
$numberOfCards = count($cards);
?>

<div class="container-fluid">
    <div class="row">
        <?php include "./components/sidenav.php"; ?>
        <!-- content -->
        <div class="col-lg-10 col-md-8 col-sm-10 col-9">
            <?php include "./components/topbar.php"; ?>
            <!-- cards -->
            <div class="row mt-5">
                    <?php for($i = 0 ; $i < $numberOfCards ; $i++) : ?>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-2">
                            <div class="card" style="font-size: 1.5rem;
                                    background-color: <?php print($cards[$i]['bg-color']); ?>;
                                    color: <?php print($cards[$i]['color']); ?>">
                            <div class="card-body">
                                <i class=" <?php print($cards[$i]['icon']); ?> fa-lg"></i>
                                <p class="text-muted fa-xs"> <?php print($cards[$i]['title']); ?></p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold">
                                    <?php print($cards[$i]['number']); ?>
                                </p>

                            </div>
                            </div>
                        </div>
                    <?php endfor; ?>
            </div>
        </div>
    </div>
</div>

<?php include "./components/footer.php"; ?>