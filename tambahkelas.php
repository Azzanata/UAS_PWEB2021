<?php include "header.php";?>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="tambahkelas.php">Tambah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="masterkelas.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h3>Data Kelas</h3>
            <div class="col-6">
                <form action="simpankelas.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="nama kelas">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>