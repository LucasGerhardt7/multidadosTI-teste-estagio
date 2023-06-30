<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>testando array</h1>
    <?php 
         $arraysidebar = array(
		
            array(
                    'titulo' => 'Cadastro',
                    'submenu' => array(
                        'Cliente','Fornecedor','Usuário', 'Produtos','Perfil de acesso'
                    )
                    ),
            array(
                'titulo' => 'Relatório',
                'submenu' => array(
                    'Cliente','Faturamento','Produtos'
                )
            )
    
        );
        $arraysidebar_ordenado = $arraysidebar;
        sort($arraysidebar_ordenado);
        sort($arraysidebar_ordenado[0]['submenu']);
        sort($arraysidebar_ordenado[1]['submenu']);
        echo "<pre>";
        echo"Array SIDEBAR ";
        var_dump($arraysidebar);
       
        echo "</pre>";
        echo "<hr>";


        foreach($arraysidebar_ordenado as $item){
            echo $item['titulo'];
            foreach ($item['submenu'] as $subitem) {
                echo $subitem; 
            };
        };
        
    ?>
<h2>Esse é o menu TOP</h2>
<ul>
    <?php foreach($arraysidebar_ordenado as $item){?>
        <li><?=$item['titulo']?>
            <?php foreach ($item['submenu'] as $subitem) {?>
                <ul>
                    <li><?=$subitem?></li>
                </ul>
            <?php };?>
        </li>
    <?php };?>

</ul>



<h2>Esse é o menu estático</h2>
<ul>
    <li><?=$arraysidebar[0]['titulo']?></li>
    <li><?=$arraysidebar[1]['titulo']?>
        <ul>
            <li><?=$arraysidebar[1]['submenu'][0]?></li>
            <li><?=$arraysidebar[1]['submenu'][1]?></li>
            <li><?=$arraysidebar[1]['submenu'][2]?></li>
            <li><?=$arraysidebar[1]['submenu'][3]?></li>
            <li><?=$arraysidebar[1]['submenu'][4]?></li>
        </ul>
    </li>
    <li><?=$arraysidebar[2]['titulo']?>
        <ul>
            <li><?=$arraysidebar[2]['submenu'][0]?></li>
            <li><?=$arraysidebar[2]['submenu'][1]?></li>
            <li><?=$arraysidebar[2]['submenu'][2]?></li>
        </ul>
    </li>
</ul>

</body>
</html>