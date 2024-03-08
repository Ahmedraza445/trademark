<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <style>
        body {
            font-size: 11px;
        }

        table thead tr th {
            border: 1px solid rgb(245, 245, 245) !important;
            font-size: 13px;
        }

        table tbody tr td {
            border: 1px solid rgb(245, 245, 245) !important;
            font-size: 11px;
        }

        .sidebar {
            background-color: #000000;
            padding: 20px;
            height: 100vh;
        }

        .logo img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .sidebar button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #D2042D;
            color: white;
            border: none;
            text-align: left;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <div class="row">
        <div class="col-2 sidebar">
            <div class="logo">
                <img src="{{ asset('images/logo 2.png') }}" alt="Logo">
            </div>
            <button class="ajax" id="user">Users</button>
            <button class="ajax" id="order">Orders</button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" id="logout">
                    <button class="ajax">Logout</button>
                </a>
            </form>
        </div>
        <div id="orderTable" class="col-9 p-4">
            <table class="table2">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Customer Name</th>
                        <th>Tr. Name</th>
                        <th>Tr. Slogan</th>
                        <th>Tr. Logo </th>
                        <th>Product Description</th>
                        <th>Industry</th>
                        <th>Business Type</th>
                        <th>Based On</th>
                        <th>Package</th>
                        <th>Service</th>
                        <th>Card Type</th>
                        <th>Card Name</th>
                        <th>Card Number</th>
                        <th>CVC</th>
                        <th>Expiry</th>
                        <th>Zip Code</th>
                        <th>Country</th>
                        <th>Province</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Submitted At</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trademark as $trademark)
                        <tr>
                            <td>{{ $trademark['user_id'] }}</td>
                            <td>{{ $trademark['user']['name'] }}</td>
                            <td>{{ $trademark['tr_name'] }}</td>
                            <td>{{ $trademark['tr_slogan'] }}</td>
                            <td>{{ $trademark['tr_logo'] }}</td>
                            <td>{{ $trademark['products'] }}</td>
                            <td>{{ $trademark['industry'] }}</td>
                            <td>{{ $trademark['type_of_business'] }}</td>
                            <td>{{ $trademark['us_based'] }}</td>
                            <td>{{ $trademark['packageName'] }}</td>
                            <td>{{ $trademark['serviceName'] }}</td>
                            <td>{{ $trademark['card'] }}</td>
                            <td>{{ $trademark['cardName'] }}</td>
                            <td>{{ $trademark['cardNumber'] }}</td>
                            <td>{{ $trademark['cvc'] }}</td>
                            <td>{{ $trademark['expiry'] }}</td>
                            <td>{{ $trademark['zipCode'] }}</td>
                            <td>{{ $trademark['country'] }}</td>
                            <td>{{ $trademark['province'] }}</td>
                            <td>{{ $trademark['city'] }}</td>
                            <td>{{ $trademark['address'] }}</td>
                            <td>{{ $trademark['updated_at'] }}</td>
                            <td>{{ $trademark['t_Price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="userTable" class="col-9 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td>{{ $user['id'] }}</td>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['phone_number'] }}</td>
                            <td>{{ $user['created_at'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>This is a basic modal.</p>
        </div>
    </div>
</body>
<script>
    // Initialize DataTable
    $(document).ready(function() {
        $('.table').DataTable();
        $('.table2').DataTable({
            "scrollX": true,
        });
    });

    $(document).ready(function() {
        setTimeout(function() {
            window.location.href = '/adminPortal';
        }, 20000);

        $('#orderTable').hide();

        $('#user').click(function() {
            $('#userTable').show();
            $('#orderTable').hide();
        });

        $('#order').click(function() {
            $('#userTable').hide();
            $('#orderTable').show();
        });
    });
</script>

</html>
