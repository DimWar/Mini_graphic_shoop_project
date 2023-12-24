<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/admin_style/index_2.css">
</head>
<body>
<!-- session alert start -->
<?php include 'tools/session_alert.php'; ?>
<!-- session alert end -->    
<!-- sidebar adn header start -->
<?php include 'tools/side_bar.php'; ?>
<!-- sidebar and header end -->

<!-- add skill start -->    
    <form action="skill.php" method="post" >
        <div class="add_skill">
            <h3 class="skill_name_sec">Add Your Skill</h3>
            <label for="skill_inp" class="labl">
                Add New Skill :
                <input type="text" name="nameSkill" class="new_skill_inp inp" id="skill_inp" autofocus required>
            </label>
            <label for="skill_percent" class="labl">
                Skill Percent :
                <input type="number" name="numberSkill" class="per_skill_inp inp" id="skill_percent" required max='100' min='0'>
            </label>
            <label for="send_btn" class="send_skill_btn">
                Send
                <input type="submit" value="" id="send_btn">
            </label>
        </div>
    </form>
        <!-- user skill start --> 
        <table class="list_skill">
            <thead>
                <tr>
                    <th id="name_table">Your Skill</th>
                </tr>
                <tr>
                    <th>Skill name</th>
                    <th>Persent</th>
                    <th>
                        Edit / Delete
                    </th>

                </tr>
            </thead>
            <tbody>


            <?php foreach($skillCurrentData as $key => $value): ?>
                <tr>
                    <th><?= $value['name'] ?></th>
                    <th><?= $value['number'] ?>%</th>
                    <th>
                        <label for="edit_btn" class="edt_btn">
                            <a href="skillEdit.php?update_skill=<?= $value['id']; ?>"><input type="submit" value="" id="edit_btn">Edit</a>
                        </label>
                        <label for="delete_btn" class="dlt_btn">
                            <a href="?delete_skill=<?= $value['id']; ?>" onclick="return confirm('are you sure to delete skill ?');"><input type="submit" value="" id="delete_btn" >Delete</a>
                        </label>
                    </th>
                    
                </tr>   
            <?php endforeach ?>    
               
                
            </tbody>
        </table>
        <!-- user skill end --> 
<!-- add skill end --> 



    <script src="assets/js/script.js"></script>
</body>
</html>