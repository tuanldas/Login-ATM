<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/atm/view/css/list.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <a href="index.php?page=add"><h1>transfers</h1></a>
            <a href="index.php?page=user"><h1>user</h1></a>
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">id</th>
                        <th class="column2">Target Id</th>
                        <th class="column3">Source Id</th>
                        <th class="column4">Amount</th>
                        <th class="column5">Content</th>
                        <th class="column6">Datetime</th>
                        <th class="column6">Success</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td class="column1"><?php echo $post->id ?></td>
                            <td class="column2"><?php echo $post->targetId ?></td>
                            <td class="column3"><?php echo $post->sourceId ?></td>
                            <td class="column4"><?php echo $post->amount ?> $</td>
                            <td class="column5"><?php echo $post->content ?></td>
                            <td class="column6"><?php echo $post->datetime ?></td>
                            <td class="column6"><?php if ($post->success == 0) {
                                    echo "giao dịch thất bại ";
                                } else {
                                    echo "giao dịch thành công";
                                };
                                ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
