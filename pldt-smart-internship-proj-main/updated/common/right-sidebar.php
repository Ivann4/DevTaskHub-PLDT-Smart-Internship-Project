<?php 
   // require_once(__DIR__.'/pldt-smart-internship-proj-main/updated/auth/auth.php');
?>
<aside class="right-sidebar">
    <section class="summary">
        <h2>Tasks</h2>
        <div class="stats">
            <div class="stat">
                <h3>Assigned Tasks</h3>
                <p><?php echo $db->getAssignedTasks(); ?></p>
            </div>
            <div class="stat">
                <h3>Pending Tasks</h3>
                <p><?php echo $db->getPendingTasks(); ?></p>
            </div>
            <div class="stat">
                <h3>Tasks In Progress</h3>
                <p><?php echo $db->getInProgressTasks(); ?></p>
            </div>
            <div class="stat">
                <h3>Tasks Finished</h3>
                <p><?php echo $db->getCompletedTasks(); ?></p>
            </div>
        </div>
    </section>
</aside>
