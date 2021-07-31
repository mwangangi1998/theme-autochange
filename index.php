
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Theme</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <div class="check">
        <input type="checkbox" name="" id="checkbox" class="checkbox">
        <label for="checkbox" class="label">
            <i class="fas fa-moon"></i>
            <div class="fas fa-sun"></div>
            <div class="ball"></div>
        </label>
    </div>
   
    <script >
    
const  checkbox =
document.getElementById('checkbox');
checkbox.addEventListener('change',() =>{
document.body.classList.toggle('dark');
});
    </script>
</body>
</html>