<?php
include __DIR__."/../../inc/header.php";
include __DIR__."/../../inc/sidebar.php";
?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Update Profil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Update Profil</li>
        </ol>
        <div class="row mb-4">
        <div class="col-4 text-center">
            <div class="card shadow-sm">
            <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                <img src="<?php echo BASE_URL;?>/assets/img/admin.avif" class="rounded-circle" width="100px" alt="">
                    <hr>
                    <li>Admin</li>
                    <hr>
                    <li>0897789123</li>
                </ul>
                    <a href="<?php echo BASE_URL;?>/pages/update_profil/update_profil.php" class="btn btn-block btn-primary">Edit</a>
            </div>
            </div>
            </div>
            <div class="col-8">
            <div class="card shadow-sm">
            <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Profil</h4>
                </div>
                    <div class="card-body">
                    <table class="table table-striped" width="100%" cellspacing="0">
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                            <th>Kontak</th>
                                <td>:</td>
                                <td>09899213</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td>admin</td>
                            </tr>
                    </table>
                    </div>
            </div>
            </div>
        </div>
    </div>
</main>
<?php
include "../../inc/footer.php";
?>