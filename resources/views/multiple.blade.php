<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multiply</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: blanchedalmond;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-control {
            width: 300px;
            margin-bottom: 10px; /* Add space between button and form */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .table-container {
            margin-top: 30px;
        }

        .table-responsive {
            max-height: 400px; /* Increase the table size */
            overflow: auto;
            outline: 1px solid #ddd; /* Outline outside the table */
        }

        /* Make the table header sticky */
        table thead th {
            position: sticky;
            top: 0;
            background-color: #007bff;
            color: #fff;
        }

        table td, table th {
            width: 150px; /* Adjust the width of table columns */
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>คูณตัวเลขที่กรอกด้วย 1-24</h1>
    </div>
    <form class="container text-center" method="POST" action="/result">
        @csrf
        <div class="form-group">
            <input class="form-control" type="number" name="number" placeholder="Enter number here" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>

    @if (session('multiplier'))
        <div class="container table-container">
            <h1>ตารางสูตรคูณแม่ {{ session('multiplier') }}</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Multiplier</th>
                            <th>x</th>
                            <th>Multiplicand</th>
                            <th>=</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $multiplier = (int) session('multiplier'); ?>
                        <?php for ($multiplicand = 1; $multiplicand <= 24; $multiplicand++) {
                                $result = $multiplier * $multiplicand;
                            ?>
                            <tr>
                                <td><?php echo $multiplier; ?></td>
                                <td>x</td>
                                <td><?php echo $multiplicand; ?></td>
                                <td>=</td>
                                <td><?php echo $result; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
