@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Light gray background */
        }
        /* Custom modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border-radius: 0.5rem;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .close-button:hover,
        .close-button:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation Bar (Example - adjust as per your Jetstream setup) -->
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-semibold text-gray-800">
                        Laravel Jetstream
                    </a>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Admin User Dropdown (Placeholder) -->
                    <div class="ml-3 relative">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                            Admin User
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Admin Dashboard - Student Management
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <!-- Form to Add New Student -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-6">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Add New Student</h3>
                            <form id="addStudentForm" method="POST" onsubmit="addStudent(event)">
                                <div class="mb-4">
                                    <label for="new_student_name" class="block text-gray-700 text-sm font-bold mb-2">Student Name:</label>
                                    <input type="text" id="new_student_name" name="new_student_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500" placeholder="Enter student name" required>
                                </div>
                                <div class="mb-4">
                                    <label for="new_student_id" class="block text-gray-700 text-sm font-bold mb-2">Student ID:</label>
                                    <input type="text" id="new_student_id" name="new_student_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500" placeholder="Enter student ID" required>
                                </div>
                                <div class="mb-6">
                                    <label for="new_course" class="block text-gray-700 text-sm font-bold mb-2">Course:</label>
                                    <input type="text" id="new_course" name="new_course" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-green-500" placeholder="Enter course" required>
                                </div>
                                <div class="flex items-center justify-between">
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                        Add Student
                                    </button>
                                </div>
                            </form>
                        </div>

                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Submitted Student Data</h3>

                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-lg shadow-md">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Student Name</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 text-sm font-light" id="studentDataTableBody">
                                    <!-- Student data rows will be injected here by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- QR Code Modal -->
    <div id="qrCodeModal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h4 class="text-xl font-semibold text-gray-800 mb-4">QR Code for Student Data</h4>
            <div id="qrcode" class="flex justify-center p-4"></div>
            <p class="text-center text-gray-600 text-sm mt-2">Scan this QR code to view student details.</p>
        </div>
    </div>

    <!-- QR Code Library -->
    <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>

    <script>
        // Simulate student data (in a real app, this would come from your backend/database)
        let studentData = [
            { name: "Juan Dela Cruz", id: "2023-0001", course: "BSIT" },
            { name: "Maria Clara", id: "2023-0002", course: "BSCS" },
            { name: "Jose Rizal", id: "2023-0003", course: "BSED" }
        ];

        const studentDataTableBody = document.getElementById('studentDataTableBody');
        const qrCodeModal = document.getElementById('qrCodeModal');
        const qrcodeContainer = document.getElementById('qrcode');
        const addStudentForm = document.getElementById('addStudentForm');

        let qr = null; // Variable to hold the QR code instance

        // Function to populate the table with student data
        function populateStudentTable() {
            studentDataTableBody.innerHTML = ''; // Clear existing rows
            studentData.forEach(student => {
                const row = document.createElement('tr');
                row.classList.add('border-b', 'border-gray-200', 'hover:bg-gray-100');

                // Only display student name and make it clickable
                row.innerHTML = `
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <button onclick="generateQRCode('${student.name}', '${student.id}', '${student.course}')"
                                class="text-blue-600 hover:text-blue-800 font-medium focus:outline-none">
                            ${student.name}
                        </button>
                    </td>
                `;
                studentDataTableBody.appendChild(row);
            });
        }

        // Function to handle adding a new student from the form
        function addStudent(event) {
            event.preventDefault(); // Prevent default form submission

            const newStudentName = document.getElementById('new_student_name').value;
            const newStudentId = document.getElementById('new_student_id').value;
            const newCourse = document.getElementById('new_course').value;

            if (newStudentName && newStudentId && newCourse) {
                const newStudent = {
                    name: newStudentName,
                    id: newStudentId,
                    course: newCourse
                };
                studentData.push(newStudent); // Add new student to the array
                populateStudentTable(); // Re-populate the table to show the new student
                addStudentForm.reset(); // Clear the form fields
            } else {
                // You can add a more user-friendly alert here, e.g., a custom modal
                console.error("Please fill in all fields.");
            }
        }

        // Function to generate and display QR code
        function generateQRCode(name, id, course) {
            const qrData = `Student Name: ${name}\nStudent ID: ${id}\nCourse: ${course}`;

            // Clear previous QR code if any
            qrcodeContainer.innerHTML = '';

            // Create new QR code instance
            qr = new QRCode(qrcodeContainer, {
                text: qrData,
                width: 200,
                height: 200,
                colorDark : "#000000",
                colorLight : "#ffffff",
                correctLevel : QRCode.CorrectLevel.H
            });

            // Show the modal
            qrCodeModal.style.display = 'flex'; // Use flex to center content
        }

        // Function to close the QR code modal
        function closeModal() {
            qrCodeModal.style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == qrCodeModal) {
                closeModal();
            }
        }

        // Initial population of the table when the page loads
        document.addEventListener('DOMContentLoaded', populateStudentTable);
    </script>
</body>
</html>

@endsection
