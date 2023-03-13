<!-- component -->
<html>
    <head>
    @vite(['resources/css/app.css','resources/js/app.js'])

    </head>
    <body >
<!-- component -->
<!-- component -->
<div class=" bg-indigo-50">
  <!-- Header -->
  <header>
    <h1 class="bg-white py-4 text-center">
    <a href="/" class="text-xl font-bold text-gray-700 cursor-pointer">BUSINESS MODEL CANVAS</h1>
    </h1>
    <nav class="mt-6">
      <ul class="flex justify-center  items-center space-x-4">
        <li><a href="/" class="text-md font-semibold text-gray-600 hover:text-gray-800">Home</a></li>
        <li><a href="/new-project" class="text-md font-semibold text-gray-600 hover:text-gray-800">New Project</a></li>
        <li><a href="/about" class="text-md font-semibold text-gray-600 hover:text-gray-800">About</a></li>
      </ul>
    </nav>
  </header>
  
  <section class="min-h-screen body-font text-gray-600 ">
    <div class="container mx-auto px-5 py-10">
      <div class="-m-4 flex flex-wrap">
      @foreach($products as $product)
        <div class="w-full p-4 md:w-1/2 lg:w-1/4">
          <a class="relative block h-48 overflow-hidden rounded" href="/products/view/{{$product->id}}">
            <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer" src="https://dummyimage.com/420x260" />
          </a>
          <div class="mt-4">
            <h2 class="title-font text-lg font-medium text-gray-900">{{$product->name}}</h2>
            <p class="mt-1">&#8369;{{$product->price}}</p>
            <p class="mt-1">{{$product->quantity}} pcs. left</p>
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p class="text-center  py-4 bg-white">Create By &copy; YOTHIN INTHAVYXUP</p>
  </footer>
</div>
    </body>
</html>