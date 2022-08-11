<?php 

$var = htmlspecialchars($_POST['msg']);

function posilator ($nam1){
    if ($nam1 <= 9){
        echo "уйди нахуй отсюда";
    }elseif ($nam1 <= 13){
        echo "себись мелкая хуеглотина я твой мама трахал";
    }elseif ($nam1 <= 16){
        echo "тут какбы моё почтение, удачи";
    }else{
        echo "этот возраст не добавлен";
    }
}
posilator ($var);

// тестить на нашем сайте http://gametheway.unaux.com/learning2/

?>