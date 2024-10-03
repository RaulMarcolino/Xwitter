<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xwitter - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="images/png" href="../images/xwitter.ico">
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">
<?php
$title = 'Home';
ob_start();
?>
<div class="min-h-screen flex max-w-7xl mx-auto">
        <div class="w-1/4 p-4 hidden md:block">
            <nav class="space-y-4">
                <a href="/dashboard"
                    class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">home</span>
                    <span>Home</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">search</span>
                    <span>Explorar</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">notifications</span>
                    <span>Notificações</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">person</span>
                    <span>Perfil</span>
                </a>
                <a href="/logout"
                    class="flex items-center space-x-2 text-xl text-gray-200 font-bold hover:bg-gray-600 p-2 rounded-md">
                    <span class="material-icons">exit</span>
                    <span>Sair</span>
                </a>
            </nav>
        </div>
        <div class="w-full md:w-1/2 p-4 border-x">
            <div class="border-b p-4 mb-4">
                <h2 class="text-white text-xl font-bold">Página Inicial</h2>
            </div>
            <div class="flex space-x-4 p-4 border-b">
                <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                    <div class="flex-1">
                        <form action="/tweet" method="POST">
                        <textarea rows="3"
                            name="tweet"
                            class="w-full border border-gray-300 text-black rounded-lg p-2 focus:outline-none"
                            placeholder="O que está acontecendo?"></textarea>
                        <div class="text-right mt-2">
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600">
                                Tweetar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="p-4 border-b">
                <div class="flex items-start space-x-4">
                    <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                    <div>
                        <div class="flex items-center space-x-2">
                            <span class="text-white font-bold">John Doe</span>
                            <span class="text-sm text-gray-500">@johndoe</span>
                            <span class="text-sm text-gray-500">· 2h</span>
                        </div>
                        <p class="text-white text-white-800">Este é um exemplo de post no feed de Xwitter. É aqui que as
                            atualizações e pensamentos rápidos são postados.</p>
                        <div class="flex space-x-8 mt-2 text-gray-500">
                            <button class="text-white flex items-center space-x-1 hover:text-blue-500">
                                <span class="material-icons">chat_bubble_outline</span>
                                <span>12</span>
                            </button>
                            <button class="text-white flex items-center space-x-1 hover:text-green-500">
                                <span class="material-icons">repeat</span>
                                <span>8</span>
                            </button>
                            <button class="text-white flex items-center space-x-1 hover:text-red-500">
                                <span class="material-icons">favorite_border</span>
                                <span>34</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/4 p-4 hidden lg:block">
            <div class="bg-slate-900 p-4 rounded-lg shadow-md">
                <h3 class="text-white text-lg font-bold">Quem seguir</h3>
                <div class="space-y-4 mt-4">
                    <div class="flex items-center space-x-4">
                        <img src="/images/avatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                        <div>
                            <p class="text-white font-bold">John Doe</p>
                            <p class="text-gray-500 text-sm text-gray-500">@johndoe</p>
                            <button class="mt-1 text-sm text-blue-500">Seguir</button>
                        </div>
                    </div>
                </div>
                <div class="space-y-4 mt-4">
                    <div class="flex items-center space-x-4">
                        <img src="/images/xwitteravatar.png" class="w-12 h-12 rounded-full" alt="User Avatar">
                        <div>
                            <p class="text-white font-bold">Xwitter</p>
                            <p class="text-gray-500 text-sm text-gray-500">@xwitter</p>
                            <button class="mt-1 text-sm text-blue-500">Seguir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/main.php';?>
</body>
</html>