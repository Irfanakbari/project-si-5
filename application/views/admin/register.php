<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Register</title>
    <link rel="icon" href="/assets/img/" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/login.css">
</head>

<body>
    <div class="log-form">
        <center>
            <h2>Register Administrator SMAN 1 Stabat</h2>
        </center>

        <form method="POST">
            <input type="text" name="nama" required placeholder="Nama" /><br />
            <input type="text" name="username" required placeholder="Username" /><br />
            <input type="password" name="password" required placeholder="Password" /><br />
            <center>
                <button class="btn" name="doregister">Register</button>
            </center>
        </form>
    </div>

    <script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                $(".btn").html("<i class='fa fa-spinner fa-spin'></i> Loading...");
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: '<?= base_url() ?>auth/prosesRegister',
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        const obj = JSON.parse(data);
                        if (obj.status == 'success') {
                            window.location.href = '<?= base_url() ?>admin/login';
                        } else {
                            $(".btn").html("Login");
                            alert(obj.message);
                        }
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        });
    </script>
</body>

</html>