<html lang="en">

<head>

</head>


<body>


<h1> Task for the day</h1>

<ul>

   <li>

        <strong>Name :</strong> <?= $task['Title']; ?>

    </li>

    <li>

        <strong>Due date :</strong> <?= $task['due']; ?>

    </li>

    <li>

        <strong>Person Responsible :</strong> <?= $task['assigned_to']; ?>

    </li>



    <li>

        <strong>Status :</strong>

       <?php if ($task['completed']) : ?>

        <span class="icon"> &#9989; </span>

        <?php else : ?>

           <span class="icon">Incomplete</span>

        <?php endif ?>



    </li>



</ul>


</body>

</html>