<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input/Output Table</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Table Styling */
        .hci-table {
            width: 90%;
            margin: 2rem auto;
            border-collapse: collapse;
            text-align: left;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        .hci-table th,
        .hci-table td {
            border: 1px solid #ddd;
            padding: 1rem;
        }

        .hci-table thead {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .hci-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .hci-table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background 0.2s ease;
        }

        .hci-table th {
            font-size: 1.1rem;
        }

        .hci-table td {
            font-size: 0.95rem;
        }

        /* Responsive Styling */
        @media screen and (max-width: 768px) {
            .hci-table {
                width: 100%;
                font-size: 0.9rem;
            }

            .hci-table th,
            .hci-table td {
                padding: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <table class="hci-table">
        <thead>
            <tr>
                <th>Screen</th>
                <th>Input</th>
                <th>Output</th>
                <th>HCI Norms Followed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Login Screen</strong></td>
                <td>Phone No, and PIN.</td>
                <td>Success or failure message based on login credentials.</td>
                <td>
                    - Simple form with clear labels.<br>
                    - Password field hides text.<br>
                    - User-friendly error messages.
                </td>
            </tr>
            <tr>
                <td><strong>Registration Screen</strong></td>
                <td> Phone Number, OTP verification, and PIN setup.</td>
                <td>Account creation confirmation or validation errors.</td>
                <td>
                    - Step-by-step process.<br>
                    - validation feedback for inputs.<br>
                    - Clear OTP input field.
                </td>
            </tr>
            <tr>
                <td><strong>Chat Interface</strong></td>
                <td>Text message, attachments, chat room codes, and recipient.</td>
                <td>Sent/received encrypted messages, delivery status, and user activity.</td>
                <td>
                    - Real-time updates.<br>
                    - Clean chat layout with timestamps.<br>

                </td>
            </tr>
            <tr>
                <td><strong>Anonymous Chat Screen</strong></td>
                <td>Anonymous chat room code.</td>
                <td>Access confirmation and real-time chat messages.</td>
                <td>
                    - Prompt for entering room codes.<br>
                    - Minimalistic UI to focus on chats.
                </td>
            </tr>


            </tr>
            <tr>
                <td><strong>Logout Screen</strong></td>
                <td>User action to log out.</td>
                <td>Logout confirmation and redirection to login screen.</td>
                <td>
                    
                    - Smooth redirection.
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
