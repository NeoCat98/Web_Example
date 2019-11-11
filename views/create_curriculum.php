<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum Vitae</title>
</head>

<body>
    <a href="views/principal_view.php">INICIO</a>
    <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
        <fieldset>
            <legend>Datos Personales</legend>

            <label for="dui">DUI</label>
            <input type="text" name="dui" id="dui" placeholder="048134128" maxlength="10" pattern="[0][0-9]{7}-{0-9}">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="firstname" placeholder="Nombre" required>
            
            <!--last name-->
            
            <label for="lastName">Last Name:</label>
            <input type="text" name="lastname" id="lastname" placeholder="Apellidos" required>
            
            <!--gender-->
            
            <label for="gender">Gender</label>
            <label>
                <input type="radio" name="gender" id="" value="Masculino">M</label>
            <label>
                <input type="radio" name="gender" id="" value="Femenino">F</label>
            <br>
            <br>

            <!--last name-->
            
            <label for="tel">phone number:</label>
            <input type="tel" name="tel" id="tel" pattern="[0-9]{4}-[0-9]{4}" maxlength="9" placeholder="2222-2222">
            
            <!--last name-->
            
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birth" required>
            
            <!--last name-->
            
            <label for="cs">Civil Status</label>
            <select name="civilStatus" id="cs">
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
            </select>
           
        </fieldset>
        <br>
        <br>
        <fieldset>
            <legend>Work experience</legend>
            <textarea name="exp" id="" cols="150" rows="10" placeholder="Experiencia" required></textarea>
        </fieldset>
        <br>
        <br>
        <fieldset>
            <legend>Studies</legend>
            <textarea name="std" id="" cols="150" rows="10" placeholder="Estudios" required></textarea>
        </fieldset>
       
        <br>
        <button type="submit">SAVE</button>
    </form>
    <?php
        echo $msg;
    ?>
</body>

</html>