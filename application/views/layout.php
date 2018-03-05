<link rel = "stylesheet" type = "text/css" href ='assets/css/bootstrap.css';?>
<div class="bs-component">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-lg-8">
            <h1>Crypassa</h1>
        </div>
        <div class="col-lg-4 float-right">
            <button class="btn btn-info my-2 my-sm-0">Register</button>
            <button class="btn btn-success my-2 my-sm-0">Login</button>
            <button class="btn btn-warning my-2 my-sm-0">Download</button>
            <button class="btn btn-primary my-2 my-sm-0">Logout</button>
        </div>
    </nav>
    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
</div>
<div class="col-lg-12 row">
    <div class='col-lg-2' style="margin-right:0px; height:100vh; background-color: #ffffff; border-color: #eeeeee; padding:0px">
        <div class="list-group" style="display:block">
            <a href="#" class="list-group-item list-group-item-action active">
                My accounts
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Generate password
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                About us
            </a>
        </div>
    </div>
    <div class="col-lg-10"><?=$content?></div>
</div>