<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration for QR Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Light gray background */
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Registration for QR Code
                </h2>
            </div>
        </header>

        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                        <div id="content-container">
                            <div id="registration-form-container" class="bg-purple-50 border border-purple-200 rounded-lg p-6 mb-6">
                                <h3 class="text-2xl font-bold text-purple-800 mb-4">Enrollment Form</h3>
                                <form id="qrRegistrationForm" action="#" method="POST">
                                    <div class="mb-4">
                                        <label for="student_name" class="block text-gray-700 text-sm font-bold mb-2">Student Name:</label>
                                        <input type="text" id="student_name" name="student_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Enter student name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="student_id" class="block text-gray-700 text-sm font-bold mb-2">Student ID:</label>
                                        <input type="text" id="student_id" name="student_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-purple-500" placeholder="Enter student ID">
                                    </div>
                                    <div class="mb-4">
                                        <label for="course" class="block text-gray-700 text-sm font-bold mb-2">Course:</label>
                                        <select id="course" name="course" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-purple-500">
                                            <option value="">Select a Course</option>
                                            <option value="BSIT">Bachelor of Science in Information Technology (BSIT)</option>
                                            <option value="BSAIS">Bachelor of Science in Accounting Information System (BSAIS)</option>
                                            <option value="BSBA">Bachelor of Science in Business Administration (BSBA)</option>
                                            <option value="BSA">Bachelor of Science in Accountancy (BSA)</option>
                                            <option value="BSED">Bachelor of Secondary Education (BSED)</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="section" class="block text-gray-700 text-sm font-bold mb-2">Section:</label>
                                        <select id="section" name="section" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-purple-500">
                                            <option value="">Select a Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                    </div>
                                    <div class="mb-6">
                                        <label for="year_level" class="block text-gray-700 text-sm font-bold mb-2">Year Level:</label>
                                        <select id="year_level" name="year_level" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-purple-500">
                                            <option value="">Select Year Level</option>
                                            <option value="1st Year">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year">3rd Year</option>
                                            <option value="4th Year">4th Year</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                            Submit Form
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div id="thank-you-message" class="hidden text-center bg-green-50 border border-green-200 rounded-lg p-8">
                                <svg class="mx-auto h-24 w-24 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="text-3xl font-extrabold text-green-800 mt-4 mb-2">Thank You!</h3>
                                <p class="text-lg text-gray-700">Your registration has been successfully submitted.</p>
                                <p class="text-md text-gray-600 mt-4">You may now close this page.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.getElementById('qrRegistrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevents the default form submission (page reload)

            // Simulate server submission (Optional: for a real app, use fetch() or XMLHttpRequest)
            setTimeout(() => {
                // Hide the registration form
                document.getElementById('registration-form-container').classList.add('hidden');

                // Show the thank you message
                document.getElementById('thank-you-message').classList.remove('hidden');

                // Optional: Scroll to top so the thank you message is fully visible
                window.scrollTo({ top: 0, behavior: 'smooth' });

            }, 500); // Short delay to simulate processing
        });
    </script>
</body>
</html>