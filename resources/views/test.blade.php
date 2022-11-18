<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
    background-image: url('background.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

table{
    width: 80%;
    margin: 40px auto;
    background: rgb(124,154,167);
}

table.list{
    text-align: center;
    width: 100%;
}

td{
    border: 1px solid rgb(204,200,200);
    text-align: left;
    padding: 8px 15px;
}

tr:nth-child(even), table.list thread> tr{
    background-color: rgb(204,200,200);
}

input[type="text"],input[type="number"]{
    width:91%;
    padding:12px 20px;
    margin:8px 0;
    display: inline-block;
    border: 1px solid rgb(165,161,161);
    border-radius: 4px;
}

input[type="submit"],input[type="reset"]{
    background: #eee;
    padding:6px 12px;
    margin:15px 0 10px;
    display: inline-block;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    outline: none;
}

input[type="submit"]:hover{
    background: #4b99d8;
}

input[type="reset"]:hover{
    background: #4b99d8;
}

button{
    background: #eee;
    padding:6px 12px;
    margin:15px 0 10px;
    display: inline-block;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    cursor: pointer;
    outline: none;
}

button:hover{
    background:#4b99d8 ;
}
        </style>
    </head>
    <body>
    <table>
        <tr>
            <td>
                <form autocomplete="off" onsubmit="onFormSubmit()">
                    <div>
                        <label for="productCode">Name</label>
                        <input type="text" name="productCode" id="productCode">
                    </div>
                    <div>
                        <label for="product">Age</label>
                        <input type="text" name="product" id="product">
                    </div>
                    <div>
                        <label for="qty">Address</label>
                        <input type="text" name="qty" id="qty">
                    </div>

                    <div class="form_action--button">
                        <input type="submit" value="Submit">
                        <input type="reset" value="Edit">
                    </div>
                </form>

                <td>
                    <table class="list" id="storeList">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </td>
            </td>
        </tr>
    </table>
    </body>
</html>
