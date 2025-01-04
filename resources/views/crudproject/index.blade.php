<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .navbar {
        background-color: #333;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .heading {
        font-size: 24px;
        margin-left: 10px;
    }

    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #45a049;
    }

    table {
        margin: 20px auto;
        width: 90%;
        border-collapse: collapse;
        box-shadow: 0 0 10px 2px #ccc;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    img {
        display: block;
        margin: 0 auto;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        margin: 0 5px;
    }
    .button1 {
    background-color: #3498db; /* Set background color */
    color: white; /* Set text color */
    padding: 8px 16px; /* Set padding */
    border: none; /* Remove border */
    border-radius: 4px; /* Add border radius */
    cursor: pointer; /* Add cursor pointer */
    margin-right: 5px; /* Add margin between buttons */
}

.button1:hover {
    background-color: #2980b9; /* Change background color on hover */
}
a{
    text-decoration:none;
    color:white;
}

</style>

    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="heading">Student's Portfolio</div>
            <a href="{{ route('crudproject.create') }}" class="button">Create</a>
        </nav>
    </header>
    <h1>Enrolled Students</h1>
    <table>
        <thead>
            <tr>
                <th>Element ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>E-Mail</th>
                <th>Qualifications</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($index as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->first_name }}</td>
                    <td>{{ $value->last_name }}</td>
                    <td>{{ $value->gender }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->qualification }}</td>
                    <td><img src="{{ $value->image }}" alt="image" width="50px" height="50px"></td>
                    <td>
                    <button class="button1"><a href="{{ route('crudproject.view', [$value->id]) }}">View</a></button>
                    <button class="button1"><a href="{{ route('crudproject.edit', [$value->id]) }}">Edit</a></button>
                    <button class="button1"><a href="{{ route('crudproject.delete', [$value->id]) }}">Delete</a></button>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
