<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
        
      <div class="container-fluid d-flex justify-content-center bg-dark mt-3"> 
        <h1 class="text-white display-6 mb-0">Task Manager</h1>
    </div>


     <main>
        @yield('content')
    </main>

    <footer class="mt-20 py-20 text-center">
        <h6 class="text-gray-600">&copy; 2025 Brand. All rights reserved.</h6>
    </footer>
</body>
</html>