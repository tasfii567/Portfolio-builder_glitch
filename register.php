<?php include 'includes/header.php'; ?>

<div class="container mx-auto py-20 max-w-md">

    <h1 class="text-4xl font-bold mb-8 text-center">
        Register
    </h1>

    <form>

        <input
            type="text"
            placeholder="Full Name"
            class="w-full border p-3 rounded mb-4">

        <input
            type="email"
            placeholder="Email"
            class="w-full border p-3 rounded mb-4">

        <input
            type="password"
            placeholder="Password"
            class="w-full border p-3 rounded mb-4">

        <button
            class="w-full bg-blue-600 text-white py-3 rounded">
            Register
        </button>

    </form>

</div>

<?php include 'includes/footer.php'; ?>