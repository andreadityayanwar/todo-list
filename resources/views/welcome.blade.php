<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST APP</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

    <section>
        <div id="myDIV" class=" pb-8 bg-gray-500 max-w-xl mx-auto mt-10 rounded shadow">
                <h1 class="text-3xl font-bold text-white text-center my-2">TodoList Apps</h1>
                <input type="text" id="myTask" class="w-80 p-1 ml-5 mb-1 shadow rounded" placeholder="Silahkan Tambahkan Disini">
                <button type="submit" id="myPush" class="px-1 py-1 rounded text-white bg-blue-600 hover:bg-blue-800">Tambahkan</button>
                
                <div id="tasks" class="mx-0 mt-2 block items-center content-between bg-gray-300 border cursor-pointer border-solid rounded shadow"></div>
        </div>

        
    </section>

    <script src="js/todo.js"></script>
</body>
</html>