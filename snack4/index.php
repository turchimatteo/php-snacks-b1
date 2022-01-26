<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php
$paragrafo_lungo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit animi nulla commodi cumque iste sunt corrupti velit molestias debitis veniam eos voluptates, quasi quisquam neque assumenda. Eveniet accusantium sunt consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam consequuntur et similique ab iusto aut nemo quod optio nesciunt ratione accusantium quia sed, amet illum ipsa veritatis deleniti vero at. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis laudantium quod, consectetur tempora incidunt ab eaque. Fugiat totam sequi odio, voluptates accusantium natus ipsa ad ipsum voluptate debitis repellendus iure.';
$paragrafp_diviso = explode('.', $paragrafo_lungo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($paragrafp_diviso); $i++) { ?>
        <?php $this_paragrafo_lungo = $paragrafp_diviso[$i] ?>

        <?php if(!empty($this_paragrafo_lungo)) { ?>
            <p><?php echo trim($this_paragrafo_lungo); ?></p>
        <?php } ?>
    <?php } ?>
</body>
</html> 

