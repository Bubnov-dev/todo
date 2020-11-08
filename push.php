

<script>
    function notifyMe (title, desc) {
        var notification = new Notification (title, {
            tag : "ache-mail",
            body : desc,
            icon : "https://sun9-42.userapi.com/impf/L0INCwHPl9F_qJ9Ay823_IHL3RRctfZjNB_BlQ/mVefqAoJV7E.jpg?size=706x705&quality=96&proxy=1&sign=49e02c91d41596663aab8abc5faf3f0e"
        });
    }
    
    function notifSet (title, desc) {
        if (!("Notification" in window))
            alert ("Ваш браузер не поддерживает уведомления.");
        else if (Notification.permission === "granted")
            notifyMe(title, desc);
        else if (Notification.permission !== "denied") {
            Notification.requestPermission (function (permission) {
                if (!('permission' in Notification))
                    Notification.permission = permission;
                if (permission === "granted")
                    notifyMe(title. desc);
            });
        }
    }
//    notifSet();
</script>
<?php
function getActualTasks($db){
    echo "Getting actual tasks...<br>";
    $dateTime = new dateTime("now", new DateTimeZone('Europe/Moscow'));

    echo "dateTime: ".$dateTime->format('Y-m-d H:m:s')."<br>";
   
    $query = "select * from task where deadline = '".$dateTime->format("Y-m-d")."' and time > '".$dateTime->format("H:m:s")."' and time < '".$dateTime->add(new DateInterval('PT1H'))->format("H:m:s")."'";
    echo $query;
    $result = pg_query($db, $query);
    $tasks= pg_fetch_all($result);
    foreach ($tasks as $task) {
        echo $task['task']." --- ".$task['description']."<br>";
        echo "<script>notifSet('".$task['task']."', '".$task['description'].", planned on ".$task['time']."');</script><br>";
        $number+=5000;

    }
}
?>


