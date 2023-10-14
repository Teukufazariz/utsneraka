<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <br>
    <h1 class="text-2xl font-bold mb-5 text-center">Sign In</h1>
    <form class="mx-auto w-full max-w-lg" action="signin_process.php" method="post">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="namadepan">
            Nama Depan
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"type="text" name="namadepan" id="namadepan" placeholder="Nama Depan" required> <br>
        </div>
        <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="namabelakang">
            Nama Belakang
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="namabelakang" id="namabelakang" placeholder="Nama Belakang" required> <br>
        </div> 
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="username">
            Username
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="username" id="username" placeholder="Username" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">
            Password
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="password" name="password" id="password" placeholder="Password" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tanggal">
      Tanggal Lahir
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="tanggal" id="tanggal" required>
  </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="gender">
      Jenis Kelamin
    </label>
    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="gender" id="gender" required>
      <option value="lakilaki">Laki-laki</option>
      <option value="perempuan">Perempuan</option>
    </select>
  </div>
</div>
<div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="role">
      Role
    </label>
    <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="role" id="role" required>
      <option value="admin">Admin</option>
      <option value="user">User</option>
    </select>
  </div>
</div>
<button type="submit" class="w-full px-4 py-2 mt-6 text-white bg-blue-500 rounded-md font-bold shadow-sm hover:bg-blue-700 focus:outline-none focus:bg-blue-800">
  Sign In
</button>
    </form>
<br>
</body>
</html>
