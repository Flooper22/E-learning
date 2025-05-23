<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#4B793E] text-white">

  <!-- Register Form Section -->
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white text-black w-full max-w-md p-10 rounded-lg shadow-xl">
      <h2 class="text-3xl font-bold mb-4 text-center text-[#4B793E]">Register</h2>

      <form action="/register" method="POST" class="space-y-4">
        <div>
          <label for="username" class="block text-lg text-[#4B793E]">Username:</label>
          <input type="text" name="username" id="username" required class="w-full p-3 text-black mb-4 border border-gray-300 rounded" />
        </div>

        <div>
          <label for="email" class="block text-lg text-[#4B793E]">Email:</label>
          <input type="email" name="email" id="email" required class="w-full p-3 mb-4 text-black border border-gray-300 rounded" />
        </div>

        <div>
          <label for="password" class="block text-lg text-[#4B793E]">Password:</label>
          <input type="password" name="password" id="password" required class="w-full p-3 text-black mb-6 border border-gray-300 rounded" />
        </div>

        <button type="submit" class="w-full bg-yellow-600 text-white py-3 rounded-full hover:bg-yellow-700 transition">
          Register
        </button>
      </form>

      <p class="text-center mt-4 text-[#4B793E] text-lg">
        Already have an account? 
        <a href="/login" class="text-yellow-600 hover:text-yellow-700">Login here</a>
      </p>
    </div>
  </div>

</body>
</html>
