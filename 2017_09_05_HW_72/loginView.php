<form class="form-inline" method="post" action="index.php?action=login">
    <div class="text-center">
        <h3>Please enter both a username and password</h3>
        <div class="form-group">
            <label class="sr-only" for="username">User Name</label>
            <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
        </div>
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>