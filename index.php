<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-2xl font-bold text-blue-600">
             Portfolio Builder
        </h1>

        <div class="space-x-4">
    <a href="index.php">Home</a>
    <a href="about.php">About Me</a>
    <a href="demo.php">Demo</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</div>
    </div>
</nav>

<section class="min-h-screen flex items-center bg-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h1 class="text-5xl font-bold">
                    Create Your Professional Portfolio
                </h1>

                <p class="mt-5 text-gray-600">
                    Showcase your projects, skills and experience with beautiful portfolio templates.
                </p>

                <div class="mt-6">
                    <a href="register.php"
                       class="bg-blue-600 text-white px-6 py-3 rounded">
                        Get Started
                    </a>
                </div>
            </div>

            <div>
                <img src="assets/banner.png"
                     alt="Portfolio"
                     class="rounded-lg shadow-lg">
            </div>

        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
</body>
</html>