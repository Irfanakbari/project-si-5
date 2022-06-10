<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/tutwuri.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <script src="https://kit.fontawesome.com/3ba93a3de6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="bg ">
        <div class="header d-flex">
            <div class="logo">
                <img src="<?= base_url() ?>assets/img/tutwuri.png" alt="">
            </div>
            <div class="sosmed">
                <a title="WhatsApp Admin" href="https://api.whatsapp.com/send?phone=6282276880570" target="_blank" class="sosm1" style="text-decoration:none;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a title="WhatsApp Admin" href="<?= base_url() ?>contact" class="sosm1" style="text-decoration:none;">
                    <i class="fa-solid fa-circle-info"></i>
                </a>
            </div>
        </div>
        <!-- <div class="alert alert-danger container-sm d-flex align-items-center " role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    Mohon Maaf Portal Pengumuman Belum Dibuka
                </div>
            </div> -->
        <div class="main">
            <div class="judul">

                <p>Pengumuman Kelulusan</p>

                <!-- <center>
                        <p>Pengumuman Kelulusan</p>
                    </center> -->
                <h3>SMAN 1 Stabat</h3>
            </div>

            <div class="form">
                <h3>Login Siswa</h3>
                <form action="#" method="POST">
                    <input type="text" class="<?= form_error('message') ? 'invalid' : '' ?>" name="nisn" placeholder="NISN" value="<?= set_value('nisn') ?>" />
                    <div class="invalid-feedback"><?= form_error('nisn') ?></div>
                    <input class="btn" id="tombol" type="submit" name="login" value="Login" />
                </form>
                <center>
                    <div style="margin-bottom: 2cm;">
                        <p>&copy; 2022 | Sistem Informasi Kelompok 5</p>
                    </div>
                </center>
            </div>
        </div>
</body>
<script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#tombol").click(function() {
            $("#tombol").attr("disabled", true);
            // css
            $("#tombol").css("cursor", "not-allowed");
            $("#tombol").val("Loading...");
        });
        $("form").submit(function(e) {
            e.preventDefault();
            var nisn = $("input[name='nisn']").val();
            $.ajax({
                url: "<?= base_url() ?>auth/siswaLogin",
                type: "POST",
                data: {
                    nisn: nisn
                },
                success: function(data) {
                    const obj = JSON.parse(data);
                    if (obj.status == "success") {
                        window.location.href = "<?= base_url() ?>portal";
                    } else {
                        alert(obj.message.nisn);
                        $("#tombol").click(function() {
                            $("#tombol").attr("disabled", false);
                            // css
                            $("#tombol").css("cursor", "default");
                            $("#tombol").val("Login");
                        });
                    }
                }
            });
        });
    });
</script>

</html>