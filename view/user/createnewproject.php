<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 06.06.18
 * Time: 17:04
 */

include 'userheader.php';

?>

<h1 class="menu-heading">Create new Project</h1>
<div>
    <form id="createproject-form">
        <p class="newproject-paragraph">
            <label>Project Name</label>
        </p>
        <input class="form-control" type="text" required="" placeholder="Enter a suitable project name">
        <p class="newproject-paragraph">
            <label>Project Description</label>
        </p>
        <textarea class="form-control" rows="10" cols="1" required="" placeholder="Enter a comprehensive description of this project">

        </textarea>
        <p class="newproject-paragraph">
            <label>Add User</label>
        </p>
        <input class="form-control" type="text" required="" placeholder="Add users working on this project">
        <p id="adduser-button" class="newproject-paragraph">
            <button class="btn btn-primary" type="button">Add User</button>
        </p>
        <p class="newproject-paragraph">
            <label>Total Time Planned</label>
        </p>
        <input class="form-control" type="number" required="" placeholder="Enter the total time scheduled for this project" min="0" step="0.5">
        <p class="text-center newproject-paragraph">
            <button class="btn btn-primary" type="button">Create Project</button>
        </p>
    </form>
</div>

<?php include 'userfooter.php' ; ?>