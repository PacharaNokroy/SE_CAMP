<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #a5bbba;
        }

        h1 {
            color: #333;
        }

        .input-container {
            display: flex;
            margin-bottom: 10px;
        }

        label {
            padding-right: 10px;
        }

        input {
            padding: 5px;
            margin-right: 10px;
        }

        button {
            padding: 5px 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 25%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>ตารางสูตรคูณ</h1>
    <div class="input-container">
        <label for="my_number">กรอกตัวเลข:</label>
        <input type="number" id="my_number" value="10">
        <button onclick="generateTable()">สร้างตาราง</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>ตัวคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody id="my_tbody"></tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)
        });

        function generateTable() {
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 12; i++) {
                let result = i * my_number;
                my_code_tr += `<tr><td>${i}</td><td>${my_number} x ${i} = ${result}</td></tr>`
            }
            $('#my_tbody').html(my_code_tr)
        }
    </script>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\SE_CAMP\resources\views/welcome.blade.php ENDPATH**/ ?>