<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto bg-white shadow-2xlq p-16">

	<form method="POST" action="/products/create">
        @csrf
    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Product Name" required>
        </div>

        <div>
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
            <input type="text" id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Category" required>
        </div>  
        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
            <input type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Price"  required>
        </div>
        <div>
            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Quantity" required>
        </div>
    
    </div>
    <div class="mb-6">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
        <textarea  id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add your product description" required></textarea>
    </div> 
   
    <button type="submit" class="text-white ml-auto bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

	<p class="mt-5">These input field components is part of a larger, open-source library of Tailwind CSS components. Learn
		more by going to the official <a class="text-blue-600 hover:underline"
			href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
			Documentation</a>.
	</p>
</div>

</body>
</html>