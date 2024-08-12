<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex w-full h-screen justify-center items-center">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                           Emp ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Emp Name 
                        </th>
                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                            Designation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Salary
                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($users as $user) :?>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            <?php echo $user["empid"]; ?>
                        </th>
                        <td class="px-6 py-4">
                        <?php echo $user["empname"]; ?>
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        <?php echo $user["Designation"]; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $user["Salary"]; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>