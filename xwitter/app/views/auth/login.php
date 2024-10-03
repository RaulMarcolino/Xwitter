<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Xwitter - Login</title>
  <link rel="shortcut icon" type="images/png" href="../images/xwitter.ico">
</head>

<body class="bg-slate-900 flex items-center justify-center min-h-screen">
  <div class="flex flex-col  items-center justify-center bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
    <img src="../images/xwitter.ico" width = "150" height = "150">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>
    <div>
      <form action="/login" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Username</label>
          <input placeholder="Informe seu username" type="text" id="username" name="username" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-6">
          <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
          <input placeholder="Informe sua senha" type="password" id="password" name="password" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          <div class="btn-eyer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
        </svg>

</div>
        </div>
        <span class="flex items-center justify-center block text-sm font-medium text-gray-700 m-4">Ainda não possui conta? <a class="font-bold mx-2" href="/register">Criar conta</a></span>
        <input type="submit" value="Entrar"
        class="w-full bg-slate-900 text-white font-semibold py-2 px-4 rounded-md hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
      </div>
    </form>
     <!-- Exibir mensagem de erro -->
        <?php session_start(); ?>
        <?php if (isset($_SESSION['error_message'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 my-4 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Erro: </strong>
                <span class="block sm:inline"><?php echo $_SESSION['error_message']; ?></span>
            </div>
            <?php unset($_SESSION['error_message']); ?> <!-- Remover mensagem após exibição -->
        <?php endif; ?>
  </div>
</body>
</html>
