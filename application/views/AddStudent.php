<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: #3498db;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #3498db;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2574a9;
        }

/* phone */
        @media only screen and (max-width: 600px) {
            form {
                width: 90%;
            }
        }
/* tab */
        @media only screen and (min-width: 601px) and (max-width: 1024px) {
            form {
                width: 70%;
            }
        }
/* large screen */
        @media only screen and (min-width: 1025px) {
            form {
                width: 50%;
            }
        }
    </style>
</head>

<body>

    <form action="<?php echo base_url()?>StudentController/savedata" method="post">
        <h1>Add Student to the System</h1>

        Student No: <input type="text" name="stno" required/> <br>
        Name: <input type="text" name="name" required/> <br>
        Address: <input type="text" name="address" required/> <br>
        Phone: <input type="text" name="phone" required/> <br>
        Email: <input type="text" name="email" required/> <br>
        Grade: <input type="text" name="grade" required/> <br>

        <input type="submit" value="Save"/>
    </form>
</body>

</html>
