<?php 

$var = htmlspecialchars($_POST['msg']);

function posilator ($nam1){
    if ($nam1 <= 9){
        echo "уйди нахуй отсюда";
    }elseif ($nam1 <= 13){
        echo "себись мелкая хуеглотина я твой мама трахал";
    }elseif ($nam1 <= 16){
        echo "тут какбы моё почтение, удачи";
    }elseif ($nam1  <= 17){
        echo "чел бухай и ебись, само то";
    }elseif ($nam1 <= 18){
        echo "ахаха, вот ты и спалилися, соберай вещи поедишь родину защищиать вместе с зёмой";
    }elseif ($nam1 <= 20){
        echo "бля если ты дос ежив то это пздц как такто";
    }else{
        echo "этот возраст не добавлен";
    }
}
posilator ($var);

// тестить на нашем сайте http://gametheway.unaux.com/learning2/

?>