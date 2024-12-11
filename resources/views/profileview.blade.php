<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Light blue background */
        }
        .profile-container {
            max-width: 600px;
            margin: 80px auto;
            background-color: #ffffff; /* White background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%; /* Circular shape */
            object-fit: cover;
            border: 5px solid #007bff; /* Blue border */
            margin-top: -75px;
        }
        .profile-name {
            font-size: 24px;
            font-weight: bold;
            color: #007bff; /* Blue text */
            margin-top: 10px;
        }
        .profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .profile-table tr {
            border-bottom: 1px solid #dddddd;
        }
        .profile-table th,
        .profile-table td {
            text-align: left;
            padding: 12px 20px;
            color: #333333; /* Dark text */
        }
        .profile-table th {
            background-color: #007bff; /* Blue background */
            color: #ffffff; /* White text */
            font-weight: bold;
        }
        .profile-table tr:last-child {
            border-bottom: none;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <!-- Profile Picture -->

        <img src="images/{{$user->userPicture}}" alt="Profile Picture" class="profile-picture">

        <!-- User Name -->
        <h1 class="profile-name">{{$user->userName}}</h1>

        <!-- Profile Details Table -->
        <table class="profile-table">
            <tr>
                <th>Email</th>
                <td>{{ $user->userEmail }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ ucfirst($user->role) }}</td>
            </tr>
            <tr>
                <th>Account Created</th>
                <td>{{ $user->created_at->format('d M Y, h:i A') }}</td>
            </tr>
            <tr>
                <th>Last Updated</th>
                <td>{{ $user->updated_at->format('d M Y, h:i A') }}</td>
            </tr>
        </table>

        <!-- Back to Dashboard Button -->
        <a href="/" class="btn">Back to Home</a>
    </div>
</body>
</html>
