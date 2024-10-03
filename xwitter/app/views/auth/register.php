<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xwitter - Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="images/png" href="../images/xwitter.ico">
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">

    <div class="flex flex-col  items-center justify-center bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
        <img src="../images/xwitter.ico" width = "150" height = "150">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Registre-se</h2>
        <div>

            <form action="/register" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" placeholder="Informe seu nome" id="name" name="name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-black-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Usuário</label>
                    <input type="text" placeholder="Informe seu username" id="username" name="username" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input placeholder="Informe seu email" type="email" id="email" name="email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input placeholder="Informe sua senha" type="password" id="password" name="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <input type="submit" value="Cadastrar"
                class="w-full bg-slate-900 text-white font-semibold py-2 px-4 rounded-md hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
            </form>
        </div>
    </div>
    
</body>
</html>