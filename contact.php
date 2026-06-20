<?php include 'includes/header.php'; ?>

<div class="container mx-auto py-20 px-6 max-w-xl">

    <h1 class="text-4xl font-bold mb-8">
        Contact Us
    </h1>

    <form>

        <input
            type="text"
            placeholder="Name"
            class="w-full border p-3 rounded mb-4">

        <input
            type="email"
            placeholder="Email"
            class="w-full border p-3 rounded mb-4">

        <textarea
            rows="5"
            placeholder="Message"
            class="w-full border p-3 rounded mb-4"></textarea>

        <button
            class="bg-blue-600 text-white px-6 py-3 rounded">
            Send Message
        </button>

    </form>

</div>

<?php include 'includes/footer.php'; ?>